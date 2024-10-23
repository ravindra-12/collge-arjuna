<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\PastRecruitersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CollegeDataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdmissionCutoffController;
use App\Http\Controllers\AdmissionRecordController;
use App\Http\Controllers\Admin\CollegePdfController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Artisan;



// Route::get('/', function () {





// Route::get('/college/{id}/filter-branches', [CollegeController::class, 'filterBranches'])->name('filter.branches');
Route::get('/college/{id}/filter-branches', [CollegeController::class, 'filterBranches'])->name('filter.branches');

Route::post('/courses/store', [CourseController::class, 'addCourse'])->name('courses.store');

Route::get('addcourses', function () {
    return view('addform.add_courses'); // Make sure this matches your view file path
});

//     return view('home');
// });


Route::post('/admin/upload-pdf', [CollegePdfController::class, 'store'])->name('admin.upload.pdf');
Route::get('/admin/upload-pdf', function() {
    $colleges = App\Models\CollegeInfo::all();
    return view('admin.upload_pdf', compact('colleges'));
})->name('admin.upload.pdf.form');


Route::get('/clear-cache', function() {
    Artisan::call('route:clear');
    return 'Routes cache cleared!';
});


Route::get('/create-storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link created!';
});


Route::get('/', [PostController::class, 'updatePosts']);

Route::get('collegelayout', function () {
    return view('collegelayout');
});


Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});


Route::get('colleges', [CollegeController::class, 'GetallCollege'])->name('colleges');

Route::get('college/{id}', [CollegeController::class, 'collegeweb']);
Route::get('collegeweb/{id}', [CollegeController::class, 'collegeweb'])->name('collegeweb');
Route::get('/search-suggestions', [CollegeController::class, 'fetchSuggestions'])->name('search.suggestions');


Route::get('import', function () {
    return view('import');
});

Route::get('importenquiry', function () {
    return view('importenquiry');
});

Route::post('/import', [PastRecruitersController::class, 'import'])->name('past-recruiters.import');


Route::post('/importenquiry', [PastRecruitersController::class, 'importalsoknownas'])->name('enquiry.import');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/search-colleges', [CollegeController::class, 'searchColleges'])->name('search.colleges');

// AuthController

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('logoutt');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dashboardlayout', function () {
//     return view('dashboardlayout');
// })->middleware('auth')->name('dashboard');
// Route::get('/dashboardlayout', function () {
//     return view('dashboardlayout');
// })->middleware('auth')->name('dashboard');;


// Cuttoff
Route::get('admission_records/import', [AdmissionRecordController::class, 'showImportForm'])->name('admission_records.import');
Route::post('admission_records/import', [AdmissionRecordController::class, 'import'])->name('admission_records.import.store');
Route::get('admission_records', [AdmissionRecordController::class, 'index'])->name('admission_records.index');
// 

// Route::get('/admission-records/cutoff/{id}/{year}', [AdmissionRecordController::class, 'showCutoff'])->name('admission_records.cutoff');

Route::get('/admission-records/cutoff/{id}/{year}', [AdmissionRecordController::class, 'showCutoff'])->name('admission_records.cutoff');


Route::get('addstudentcategory', [AdmissionCutoffController::class, 'GetStudentCategory']);
Route::get('/cutoffs', [AdmissionCutoffController::class, 'getCutoffs'])->name('cutoffs.index');
Route::get('studentcategory/{id}', [AdmissionCutoffController::class, 'GetStudentCategoryById'])->name('studentcategory.id');
Route::put('studentcategory/{id}', [AdmissionCutoffController::class, 'UpdateStudentCategory'])->name('studentcategory.update');
Route::post('/addcutoffs', [AdmissionCutoffController::class, 'AddStudenCatrgory'])->name('studentcategory.add');
Route::delete('studentcategory/{id}', [AdmissionCutoffController::class, 'DeleteStudeCategory'])->name('studentcategory.delete');


// SeatPool

Route::get('addseatpool', [AdmissionCutoffController::class, 'GetAllSeatPool']);
Route::post('addseatpool', [AdmissionCutoffController::class, 'AddSeatPool'])->name('add.seatpool');

Route::delete('seatpool/{id}', [AdmissionCutoffController::class, 'DeleteSeatPool'])->name('seatpool.delete');

Route::get('seatpool/{id}', [AdmissionCutoffController::class, 'GetSeatPoolById'])->name('seatpool.id');
Route::put('updateseatpool/{id}', [AdmissionCutoffController::class, 'UpdateseatPoolById'])->name('seatpool.update');

Route::get('/admission-cutoffs/create', [AdmissionCutoffController::class, 'create'])->name('admission-cutoffs.create');
Route::post('/admission-cutoffs', [AdmissionCutoffController::class, 'store'])->name('admission-cutoffs.store');

Route::get('alladmissioncutoff', [AdmissionRecordController::class, 'GetallAdmissioncutoff']);

Route::get('/admission-cutoffs/{id}', [AdmissionCutoffController::class, 'editcutoff'])->name('admission-cutoffs.edit');

Route::put('/admission-cutoffs/{id}', [AdmissionCutoffController::class, 'updateadmissionCutoff'])->name('admission-cutoffs.update');

Route::delete('/admissioncutoffs/{id}', [AdmissionCutoffController::class, 'DeleteAdmissionCutoffs'])->name('admission-cutoffs.delete');

Route::delete('/colleges/{college}/cutoff/{cutoff}', [AdmissionRecordController::class, 'deleteCutoff'])->name('admission.cutoff.delete');
Route::delete('/colleges/{college}/cutoffs', [AdmissionRecordController::class, 'deleteAllCutoffs'])->name('admission.cutoff.deleteAll');

Route::get('/cutoff/{id}/edit', [AdmissionRecordController::class, 'editCutoff'])->name('cutoff.edit');

// Route to update a single cutoff
Route::put('/cutoff/{id}', [AdmissionRecordController::class, 'updateCutoff'])->name('cutoff.update');


Route::get('/admin', function () {
    return view('dashboardlayout');
})->middleware('auth', 'role:admin');
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('auth', 'role:admin');

Route::get('/user', function () {
    return view('user.dashboard');
})->middleware('auth', 'role:user');



// 


// Route::get('dashboardlayout', function (){
//     return view('dashboardlayout');
// });

Route::get('dashboardlayout', [CollegeController::class, 'dashboardlayout']);

// Route::get('category', function (){
//     return view('posts.category');
// });

Route::get('category', [PostController::class, 'AllCategory']);
Route::delete('categor/delete/{id}', [PostController::class, 'DeletCategory'])->name('category.delete');
Route::get('category/{id}', [PostController::class, 'GetcategoryById'])->name('category.id');
Route::post('category/create', [PostController::class, 'AddCategory'])->name('category.create');
Route::put('/updatecategory/{id}', [PostController::class, 'updatecategory'])->name('category.update');
// BlogPost
// Route::get('category/create', )
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('blog', function (){
//     return view('posts.blog');
// });

Route::get('forumpostdetails', function (){
    return view('forum_posts.forumpostdetails');
});

Route::get('/forum/search', [ForumPostController::class, 'search'])->name('forum.search');
// Route::put('/forum/search', [ForumPostController::class, 'search'])->name('forum.search');

Route::get('aboutus', function (){
    return view('aboutus');
});

Route::get('contactus', function (){
    return view('contactus');
});

Route::get('/blog', [PostController::class, 'blog'])->name('posts.blog');
Route::get('/blog/{id}', [PostController::class, 'GetSingleBlog'])->name('blog.show');
Route::get('/editblog/{id}', [PostController::class, 'GetBlogByIdForEdit'])->name('blog.edit');

Route::get('/allblogs', [PostController::class, 'Allblogs']);
Route::put('/updateblog/{id}', [PostController::class, 'update'])->name('blog.update');
Route::delete('/allblogs/{id}', [PostController::class, 'DeleteBlog'])->name('delete.blog');
// End BlogPost

Route::middleware(['auth'])->group(function () {
    Route::get('/create', [ForumPostController::class, 'create'])->name('forum_posts.create');
    Route::post('/forum_posts', [ForumPostController::class, 'store'])->name('forum_posts.store');
});
Route::get('/forum_posts/{id}', [ForumPostController::class, 'show'])->name('forum_posts.show');
Route::get('/forum_posts', [ForumPostController::class, 'ForumPost']);


Route::get('forum_postsdetails/{id}', [ForumPostController::class, 'forumdetails'])->name('blogdetails.show');

Route::middleware(['auth'])->group(function () {
    Route::post('/forum_posts/{id}/like', [LikeController::class, 'store'])->name('forum_posts.like');
    Route::delete('/forum_posts/{id}/like', [LikeController::class, 'destroy'])->name('forum_posts.unlike');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
});


// CollegeInfoData

Route::get('allcolleges', [CollegeController::class, 'GetCollegeInfo']);
Route::Delete('/collegeinfo/{id}', [CollegeController::class, 'CollegeInfoDelete'])->name('collegeinfo.delete');


// Display the form
Route::get('/college-data-form', [CollegeDataController::class, 'showForm'])->name('college.data.form');

// Handle form submission
Route::post('/submit-college-data', [CollegeDataController::class, 'submitData'])->name('college.data.submit');


Route::get('addcollegedata', function(){
    return view('addcollegedata');
});

// Pages
Route::get('/admission', [PostController::class, 'admissionPosts'])->name('blogs.admission');
Route::get('/exams', [PostController::class, 'examPosts'])->name('blogs.exams');
Route::get('/news', [PostController::class, 'newsPosts'])->name('blogs.news');
Route::get('/post/{id}', [PostController::class, 'GetSinglePost'])->name('post.show');

// End Pages

Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

// Add FormData


Route::post('/top-recruiters', [CollegeDataController::class, 'TopRecruiterStore'])->name('toprecruiters.store');
Route::get('addtoprecruitedata', function () {
    return view('addform.addtoprecruites'); // This should match your file path
});

// PaseRecrute

Route::post('/past-recruiters', [CollegeDataController::class, 'PastRecruiterStore'])->name('pastrecruiters.store');
Route::get('addpastrecruiters', function () {
    return view('addform.addpastrecruiter'); // Make sure this matches your view file path
});

Route::get('add-similar-colleges', function () {
    return view('addform.addsimilarcollege');
});

Route::post('/similar-colleges', [CollegeDataController::class, 'SimilarCollegeStore'])->name('similarcolleges.store');

Route::get('add-nearby-colleges', function () {
    return view('addform.addnearbycollege');
});

Route::post('/nearby-colleges', [CollegeDataController::class, 'NearbyCollegeStore'])->name('nearbycolleges.store');

// median packed offer
Route::get('add-median-packages', function () {
    return view('addform.addmedianpackages');
});

Route::post('/median-packages/store', [CollegeDataController::class, 'storeMedianPackage'])->name('medianpackages.store');



Route::get('add-institute-fee', function () {
    return view('addform.addinstitutefee');
});
Route::post('/fees/store', [CollegeDataController::class, 'storeFee'])->name('fees.store');

Route::get('add-hostel-fee', function () {
    return view('addform.addhostelfee');
});
Route::post('/hostel-fees/store', [CollegeDataController::class, 'storeHostelFee'])->name('hostel-fees.store');



Route::get('add-feewavers', function () {
    return view('addform.addfeewavers');
});
Route::post('/fee-wavers/store', [CollegeDataController::class, 'storeFeeWaver'])->name('fee-wavers.store');


Route::get('add-admissionmode', function () {
    return view('addform.add_admission-mode');
});

Route::post('/admissionmode/store', [CollegeDataController::class, 'storeadmissionmode'])->name('admissionmode.store');


Route::get('add-explore-morecolleges', function () {
    return view('addform.addexploremorecolleges');
});

Route::post('/explore-more-colleges/store', [CollegeDataController::class, 'storeExploreMoreCollege'])->name('explore-more-colleges.store');



Route::get('add-connectivities', function () {
    return view('addform.addconnectivities');
});
Route::post('/connectivities/store', [CollegeDataController::class, 'storeConnectivity'])->name('connectivities.store');



Route::get('add-branch-placements', function () {
    return view('addform.addbranchplacements');
});

Route::post('/branch-placements/store', [CollegeDataController::class, 'storeBranchPlacement'])->name('branch-placements.store');


Route::get('add-average-packages', function () {
    return view('addform.addaveragepackages');
});
Route::post('/average-packages/store', [CollegeDataController::class, 'storeAveragePackage'])->name('average-packages.store');



Route::get('add-college-info', function () {
    return view('addform.collegeinfo');
});
Route::post('/college-info/store', [CollegeDataController::class, 'storeCollegeInfo'])->name('college-info.store');


Route::get('addcourses', function () {
    return view('addform.add_courses'); // Make sure this matches your view file path
});

// UpdataCollegeData
Route::get('addinternationalranking', function () {
    return view('addform.addinternationalranking'); // Make sure this matches your view file path
});

Route::post('/international-rankings/store', [CollegeDataController::class, 'storeInternationalRanking'])->name('international-rankings.store');


// web.php
Route::get('/college/edit/{id}', [CollegeDataController::class, 'editCollegeData'])->name('college.edit');
Route::put('/college/update', [CollegeDataController::class, 'updateCollegeData'])->name('college.update');
