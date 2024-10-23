<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeInfo;
use App\Models\TopRecruiter;
use App\Models\Connectivity;
use App\Models\PastRecruiter;
use App\Models\NearbyCollege;
use Illuminate\Support\Facades\Log;
use Exception;

class PastRecruitersController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        try {
            $file = $request->file('file')->getRealPath();
            $rows = array_map('str_getcsv', file($file));
            $header = array_shift($rows);

            foreach ($rows as $row) {
                // Using safer array access and trimming data
                $collegeInfoData = [
                    'title' => isset($row[0]) ? trim($row[0]) : null,
                    'alsoknownastitle' => isset($row[1]) ? trim($row[1]) : null,
                    'image' => isset($row[2]) ? trim($row[2]) : null,
                    'description' => isset($row[3]) ? trim($row[3]) : null,
                    'institute_name' => isset($row[4]) ? trim($row[4]) : null,
                    'also_known_as' => isset($row[5]) ? trim($row[5]) : null,
                    'institute_type' => isset($row[6]) ? trim($row[6]) : null,
                    'established' => isset($row[7]) ? trim($row[7]) : null,
                    'location' => isset($row[8]) ? trim($row[8]) : null,
                    'websitetitle' => isset($row[9]) ? trim($row[9]) : null,
                    'websitelink' => isset($row[10]) ? trim($row[10]) : null,
                    'connectivityicon' => isset($row[11]) ? explode(',', trim($row[11])) : [],
                    'connectivitytitle' => isset($row[12]) ? explode(',', trim($row[12])) : [],
                    'connectivitykm' => isset($row[13]) ? explode(',', trim($row[13])) : [],
                    'toprecruiter' => isset($row[14]) ? explode(',', trim($row[14])) : [],
                    'pastrecruiter' => isset($row[15]) ? explode(',', trim($row[15])) : [],
                    'nearbycollegesimage' => isset($row[16]) ? explode(',', trim($row[16])) : [],
                    'nearbycollegestitle' => isset($row[17]) ? explode(',', trim($row[17])) : [],
                    'nearbycollegesdescription' => isset($row[18]) ? explode(',', trim($row[18])) : [],
                ];

                Log::info('Parsed CollegeInfoData', $collegeInfoData);

                // Check and create/update CollegeInfo
                if ($collegeInfoData['title']) {
                    try {
                        $collegeInfo = CollegeInfo::updateOrCreate(
                            ['title' => $collegeInfoData['title']],
                            $collegeInfoData
                        );

                        // dd($collegeInfo);

                        // Save related connectivity data
                        $this->importConnectivityData($collegeInfo, $collegeInfoData);

                        // Save related top recruiter data

                        $this->importTopRecruiterData($collegeInfo, $collegeInfoData);
                          // Save related top recruiter data
                          $this->importPastRecruiterData($collegeInfo, $collegeInfoData);
                           // Save related top nearbycolleges data
                           $this->importnearbyCollegesData($collegeInfo, $collegeInfoData);
                          
                    } catch (Exception $e) {
                        Log::error("Error updating/creating CollegeInfo: {$e->getMessage()}");
                    }
                }
            }

            return redirect('exams')->with('success', 'Data imported successfully');
        } catch (Exception $e) {
            Log::error("Error importing data: {$e->getMessage()}");
            return redirect('/')->with('error', 'Failed to import data. Check logs for details.');
        }
    }

    // Helper function to import connectivity data
    protected function importConnectivityData($collegeInfo, $data)
    {
        try {
            // Clear existing connectivity data
            $collegeInfo->Connectivity()->delete();

            // Import new connectivity data
            $count = count($data['connectivityicon']);
            for ($i = 0; $i < $count; $i++) {
                $connectivityData = [
                    'icon' => trim($data['connectivityicon'][$i]),
                    'title' => trim($data['connectivitytitle'][$i]),
                    'km' => trim($data['connectivitykm'][$i]),
                ];

                // dd( $connectivityData );

                Log::info('Parsed ConnectivityData', $connectivityData);

                // Create new Connectivity record
                $collegeInfo->Connectivity()->create($connectivityData);
            }
        } catch (Exception $e) {
            Log::error("Error importing connectivity data: {$e->getMessage()}");
        }
    }

    // Helper function to import top recruiter data
    protected function importTopRecruiterData($collegeInfo, $data)
    {
        try {
            // Clear existing top recruiter data
            $collegeInfo->toprecruite()->delete();

            // Import new top recruiter data
            $count = count($data['toprecruiter']);
            for ($i = 0; $i < $count; $i++) {
                $topRecruiterData = [
                    'title' => trim($data['toprecruiter'][$i]),
                ];

                Log::info('Parsed TopRecruiterData', $topRecruiterData);

                // Create new TopRecruiter record
                $collegeInfo->toprecruite()->create($topRecruiterData);
            }
        } catch (Exception $e) {
            Log::error("Error importing top recruiter data: {$e->getMessage()}");
        }
    }
    protected function importPastRecruiterData($collegeInfo, $data)
    {
        try {
            // Clear existing top recruiter data
            $collegeInfo->pastrecruit()->delete();

            // Import new top recruiter data
            $count = count($data['pastrecruiter']);
            for ($i = 0; $i < $count; $i++) {
                $pastpRecruiterData = [
                    'title' => trim($data['pastrecruiter'][$i]),
                ];

                Log::info('Parsed PastRecruiterData',  $pastpRecruiterData);

                // Create new TopRecruiter record
                $collegeInfo->pastrecruit()->create( $pastpRecruiterData);
            }
        } catch (Exception $e) {
            Log::error("Error importing top recruiter data: {$e->getMessage()}");
        }
    }


    // NearByCollegesData
    protected function importnearbyCollegesData($collegeInfo, $data)
    {
        try {
            // Clear existing connectivity data
            $collegeInfo->nearbycollege()->delete();

            // Import new connectivity data
            $count = count($data['nearbycollegesimage']);
            for ($i = 0; $i < $count; $i++) {
                $nearbycollegeData = [
                    'image' => trim($data['nearbycollegesimage'][$i]),
                    'title' => trim($data['nearbycollegestitle'][$i]),
                    'description' => trim($data['nearbycollegesdescription'][$i]),
                ];

                Log::info('Parsed nearbycollegeData', $nearbycollegeData);
// dd( $nearbycollegeData);
                // Create new Connectivity record
                $collegeInfo->nearbycollege()->create($nearbycollegeData);
            }
        } catch (Exception $e) {
            Log::error("Error importing connectivity data: {$e->getMessage()}");
        }
    }


}



