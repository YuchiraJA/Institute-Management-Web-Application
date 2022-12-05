<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerStudentController;
use App\Http\Controllers\registerTeacherController;

use App\Http\Controllers\QuestionController;


use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\NPDFController; 





use App\Http\Controllers\CreateController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\LibraryitemController;

use App\Http\Controllers\addLessonController;
use App\Http\Controllers\classmakingController;
use App\Http\Controllers\joinclassLessonController;

use App\Http\Controllers\ExamController;

use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\addSalaryController;

use App\Http\Controllers\EquestionController;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Accountant\AccountantController;
use App\Http\Controllers\Librarian\LibrarianController;

use App\Http\Controllers\LibraryHomeController; 
use App\Http\Controllers\MaterialController; 

use App\Http\Controllers\Admin\StudentListController;
use App\Http\Controllers\Admin\TeacherListController;
use App\Http\Controllers\Admin\LibrarianListController;
use App\Http\Controllers\Admin\AccountantListController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\Teacher\AttendanceStudentList;
use App\Http\Controllers\Teacher\AttendanceReportController;





use App\Http\Controllers\Auth\AdminForgotPasswordController;

use App\Http\Controllers\AnswerController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Joel's Routes

Route::get('/', function () {
    return view('index');
});

Route::view("dbcheck",'dbcheck');

Route::view("register-details",'register-details');

// Creating Authentications
Auth::routes();

// User(Student) Routes 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function() {
    
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function() {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register'); 
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        //Retreiveing specific admin
        Route::get('/home', [UserController::class, 'userList'])->name('home');
        //
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('/studentnotice',[NoticeController::class,'fetchsn'])->name('studentnotice');

        Route::view("/studentSchedule",'dashboard.user.studentSchedule')->name('studentSchedule');
        Route::get('/studentSchedule',[CreateController::class,'studentScheduleData']);

        Route::view("/publicTable",'dashboard.user.publicTable')->name('publicTable');
        Route::view("/gSix",'dashboard.user.gSix')->name('gSix');
        Route::view("/gSeven",'dashboard.user.gseven')->name('gSeven');
        Route::view("/gEight",'dashboard.user.gEight')->name('gEight');
        Route::view("/gNine",'dashboard.user.gNine')->name('gNine');
        Route::view("/gTen",'dashboard.user.gTen')->name('gTen');
        Route::view("/gEleven",'dashboard.user.gEleven')->name('gEleven');
        Route::view("/alMaths",'dashboard.user.alMaths')->name('alMaths');
        Route::view("/alBio",'dashboard.user.alBio')->name('alBio');
        Route::view("/alCommerce",'dashboard.user.alCommerce')->name('alCommerce');

        //financial
        Route::get('/payment',function() {
            return view('dashboard.user.AddPaymentDetails');
           });


        //Update purpose only
        Route::get('user-edit/{id}', [UserController::class, 'userShowData']);
        Route::post('user-edit/', [UserController::class, 'userUpdateData']);

      //----------------------------dulsara------------------------------------------------
        //ol class list blade
        Route::get('/class-list', function(){
         return view('dashboard.user.classList');
        });
        Route::get('/common-class', function(){
            return view('dashboard.user.commonClassPage');
            });
    
        //redirect 6-11 class
        Route::get('/redirect-ol', function(){
             return view('dashboard.user.classList');
        }); 
        //math
        Route::get('/math', [classmakingController::class, 'Math'])->name('Math');
        //science clz
        Route::get('/science', [classmakingController::class, 'science'])->name('science');
        //ICT clz
        Route::get('/ICT', [classmakingController::class, 'ICT'])->name('ICT');
        //sinhala clz
        Route::get('/Sinhala', [classmakingController::class, 'Sinhala'])->name('Sinhala');
        //english
        Route::get('/English', [classmakingController::class, 'English'])->name('English');
        //Tamil
        Route::get('/Tamil', [classmakingController::class, 'Tamil'])->name('Tamil');
        //Music
        Route::get('/Music', [classmakingController::class, 'Music'])->name('Music');
        //History
        Route::get('/History', [classmakingController::class, 'History'])->name('History');
        //Literature
        Route::get('/Elit', [classmakingController::class, 'Elit'])->name('Elit');
        //comz
        Route::get('/Commerce', [classmakingController::class, 'Commerce'])->name('Commerce');

        //Biology class list blade
        Route::get('/bio-classes', function()
        {
         return view('dashboard.user.BioClassList');
        });

        //redirect Biology class
        Route::get('/redirect-bio', function(){
         return view('dashboard.user.BioClassList');
        });

        //////physics
        Route::get('/Physics', [classmakingController::class, 'Physics']);
        //Biology 
        Route::get('/Biology', [classmakingController::class, 'Biology']);
        //chemistry
        Route::get('/Chemistry', [classmakingController::class, 'Chemistry']);
        //physics ppr clz
        Route::get('/physics-paper', [classmakingController::class, 'phypaper']);
        //che,istry ppr clz
        Route::get('/chemistry-paper', [classmakingController::class, 'chempaper']);
        //bio ppr clz
        Route::get('/bio-paper', [classmakingController::class, 'biopaper']);   
    

        Route::get('/index', function(){
            return view('dashboard.user.studentLessonview');
            });

            Route::get('/scienceL', function(){
                return view('dashboard.user.studentLessonview');
                });

            //Physical science class list blade
        Route::get('/physical-classes', function()
        {
         return view('dashboard.user.PhysicalClasses');
        });

        //redirect physical science class
        Route::get('/redirect-phy', function(){
         return view('dashboard.user.PhysicalClasses');
        });

        //com math clz
        Route::get('/Com-math', [classmakingController::class, 'comMath']);
            //com ppr clz
        Route::get('/Com-ppr', [classmakingController::class, 'comppr']);

        /////redirect cmz science class
        Route::get('/redirect-cmz', function(){
            return view('dashboard.user.commerceClasses');
        });

        
        //Bs  clz
        Route::get('/BS', [classmakingController::class, 'BS']);
        //Accounting  clz
        Route::get('/AC', [classmakingController::class, 'AC']);
        //Econ  clz
        Route::get('/Econ', [classmakingController::class, 'Econ']);

        //Bs  ppr clz
        Route::get('/BSppr', [classmakingController::class, 'BSppr']);
        //AC ppr clz
        Route::get('/ACppr', [classmakingController::class, 'ACppr']);
        //Econppr ppr clz
        Route::get('/ECppr', [classmakingController::class, 'ECppr']);


        //search lessons
        Route::post('/search-lessons',[classmakingController::class, 'searchL'])->name('searchL');

        //search subject
        Route::post('/search-subject',[addLessonController::class, 'searchsubject'])->name('searchsubject');

        //view download lessons route
        Route::get('/index', [addLessonController::class, 'index'])->name('index');
        Route::post('/index', [addLessonController::class,'index'])->name('index');

    //getsubject with join
     // Route::get('/get-subjectjoin', [addLessonController::class, 'getsubjectjoin' ]);




        Route::get('/view_papers', function () {
            $data=App\Models\Paper::all();
            return view('dashboard.user.view_papers')->with('papers',$data);
        });
        Route::get('/sPaperSearch',[PaperController::class,'search1']);

        Route::get('/view_libraryitems', function () {
            $data=App\Models\Libraryitem::all();
            return view('dashboard.user.view_libraryitems')->with('libraryitems',$data);
        });
        Route::get('/slibraryItemSearch',[LibraryitemController::class,'search1']);

        Route::get('/feedback_form', function () {
            return view('dashboard.user.feedback_form');
        });
        Route::post('/user/saveFeedback', [FeedbackController::class, 'store'])->name('saveFeedback');


        Route::get('/libraryHome', function (){
            $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
            $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
            $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
            $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
            $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
            $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
            $libraryitem7 = DB::table('materials')->count();
        
            return view('dashboard.user.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7'));
        });

        Route::get('/view_materials', function () {
            $data=App\Models\Material::all();
            return view('dashboard.user.view_materials')->with('materials',$data);
        });
        Route::get('/sMaterialSearch',[MaterialController::class,'search1']);


        /////rajith's code star

        Route::get('/view-exam', function () {
            $data=App\Models\Exam::all()->where('e_type', '=', 'MCQ');
            return view('dashboard.user.view-exam')->with('viewexam',$data);
        });

        Route::match(['get', 'post'],'/getExam/{id}', [ExamController::class, 'getExam']);

        Route::get('/view-question', function () {
            return view('dashboard.user.view-question');
        });

        Route::get('/view-essay-exam', function () {
            $data=App\Models\Exam::all()->where('e_type', '=', 'Essay');
            return view('dashboard.user.view-essay-exam')->with('viewEssayExam',$data);
        });
        
        Route::get('/view-essay-question', function () {
            return view('dashboard.user.view-essay-question');
        });
        
        Route::match(['get', 'post'],'/getEssayExam/{id}', [ExamController::class, 'getEssayExam']);

        Route::match(['get', 'post'], '/Exam/checkEkey', [ExamController::class, 'checkEkey'])->name('Exam.checkEkey');

        Route::get('/e-instructions', function () {
            return view('dashboard.user.e-instructions');
        });

        Route::get('/progress-report', function () {
            return view('dashboard.user.progress-report');
        });

        Route::get('/exam-introduction', function () {
            return view('dashboard.user.exam-introduction');
        });

        Route::match(['get', 'post'], '/Exam/checkEssayQEkey', [ExamController::class, 'checkEssayQEkey'])->name('Exam.checkEssayQEkey');

        Route::get('/essayQ-instruction', function () {
            return view('dashboard.user.essayQ-instruction');
        });

        Route::get('/add-vedio', function(){
            return view('dashboard.user.add-vedio');
        });

        Route::post('/stdAttachment', [AttachmentController::class, 'addvedio'])->name('addvedio');

        Route::match(['get', 'post'], '/finalResult/{std_id}', [ExamController::class, 'finalResult']);

        Route::get('/download-pdf/{std_id}', [ExamController::class, 'downloadProgrseeReport']);

        Route::get('/myExam/{std_id}', [ExamController::class, 'myExam']);

        Route::get('/myAnswers/{std_id}/{e_id}', [ExamController::class, 'myAnswers']);

        Route::get('/AnswerSheet-pdf/{std_id}/{e_id}', [ExamController::class, 'downloadAnswerSheet']);


        //// rajith's code end


        // 2keys Codes

        Route::get('/academic-related-trending', 'QuestionController@show')->name('academic-related-trending');

        Route::view("/q&a",'dashboard.user.q&a')->name('q&a');

        Route::view("/add-quize",'dashboard.user.add-quize')->name('add-quize');
        Route::post('/add-quize',[QuestionController::class,'addData']);
        // Route::get('/list',[QuestionController::class,'show']);

        Route::view("academic-related-most-recent",'academic-related-most-recent');
        Route::view("academic-related-my-questions",'academic-related-my-questions');
        Route::view("academic-related-my-answers",'academic-related-my-answers');

        // Route::get('/show-single-aq', 'QuestionController@showSingleAQ', 'showSingleAQ')->name('show-single-aq');
        Route::get('/single-aq/{id}', 'QuestionController@showSingleAQ')->name('single-aq');
        Route::post('/add-answer', 'AnswerController@addAnswer')->name('add-answer');

        Route::get('/single-aq/{id}', 'QuestionController@showSingleAQ')->name('single-aq');
    
        //  Route::get('/single-aq/{id}', 'AnswerController@showAcademicAnswer');

        Route::match(['get', 'post'], '/single-aq/{id}', [AnswerController::class, 'showAcademicAnswer']);
        // search
        Route::get('/q-search', [QuestionController::class, 'qSearch'])->name('q-search');
        
        //Show my question
        Route::get('/my-ques/{id}', 'QuestionController@showMyQuestion')->name('my-ques');


        //Update Question
        Route::get('/ques-edit/{id}', 'QuestionController@showUpdateData')->name('ques-edit');

        //Delete Question
        Route::get('/ques-delete/{id}', 'QuestionController@showDeleteData')->name('ques-delete');
        
        //Update Question1
        Route::post('/ques-editsave',[QuestionController::class, 'showUpdateData1'])->name('ques-editsave');

    });
});

Route::view('user/forgot-password', 'dashboard.user.forgot-password')->name('user-forgot-password');
Route::view('user/reset-password', 'dashboard.user.reset-password')->name('user-reset-password');

// Route::prefix('admin')->group([], function() {
// });

    // Password reset routes
    Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/admin/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



// Administrator Routes
Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function() {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function() {
        //Retreiveing specific admin
        Route::get('/home', [AdminController::class, 'adminList'])->name('home');
        //
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        Route::get('/student-list', [StudentListController::class, 'studentList']);
        Route::get('/student-delete/{id}', [StudentListController::class, 'studentDelete']);

        Route::get('/teacher-list', [TeacherListController::class, 'teacherList']);
        Route::get('/teacher-delete/{id}', [TeacherListController::class, 'teacherDelete']);
        
        Route::get('/librarian-list', [LibrarianListController::class, 'librarianList']);
        Route::get('/librarian-delete/{id}', [LibrarianListController::class, 'deleteLibrarian']);
        
        Route::get('/accountant-list', [AccountantListController::class, 'accountantList']);
        Route::get('/accountant-delete/{id}', [AccountantListController::class, 'accountantDelete']);

        //Delete purpose only
        Route::get('admin/home', [AdminController::class, 'adminList']);
        Route::get('admin/home/{id}', [AdminController::class, 'adminDelete']);

        //Update purpose only
        Route::get('edit/{id}', [AdminController::class, 'adminShowData']);
        Route::post('edit/', [AdminController::class, 'adminUpdateData']);
        
        //Dulsara's Views 
        Route::view('admin/Ladd', 'dashboard.admin.addLessons');

      

    });
}); 



Route::view('admin/forgot-password', 'dashboard.admin.forgot-password')->name('admin-forgot-password');
Route::view('admin/reset-password', 'dashboard.admin.reset-password')->name('admin-reset-password');

// Teacher Routes
Route::prefix('teacher')->name('teacher.')->group(function() {

    Route::middleware(['guest:teacher', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.teacher.login')->name('login');
        Route::view('/register', 'dashboard.teacher.register')->name('register');
        Route::post('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/check', [TeacherController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:teacher', 'PreventBackHistory'])->group(function() {
        //Retreiveing specific admin
        Route::get('/home', [TeacherController::class, 'teacherList'])->name('home');
        //
        Route::post('/logout', [TeacherController::class, 'logout'])->name('logout');


        // dulaksha start

        Route::view("/createschedule",'dashboard.teacher.createschedule')->name('createschedule');
        Route::view("/teacherSchedule",'dashboard.teacher.teacherSchedule')->name('teacherSchedule');
        Route::get('/teacherSchedule',[CreateController::class,'teacherScheduleData']);
        Route::get('/edit',[CreateController::class,'edit']);
        Route::get('/scheduleUpdate/{id}',[CreateController::class,'showData']);
        Route::post('/scheduleUpdate',[CreateController::class,'updateData'])->name('Schedule.update');
        Route::get('/delete/{id}',[CreateController::class,'delete']);
        Route::get('/scheduleSearch',[CreateController::class,'search']);
        Route::get('/editDownload',[CreateController::class,'editDownloadPdf']);

        Route::view("/publicTable",'dashboard.teacher.publicTable')->name('publicTable');
        Route::view("/gSix",'dashboard.user.gSix')->name('gSix');
        Route::view("/gSeven",'dashboard.user.gseven')->name('gSeven');
        Route::view("/gEight",'dashboard.user.gEight')->name('gEight');
        Route::view("/gNine",'dashboard.user.gNine')->name('gNine');
        Route::view("/gTen",'dashboard.user.gTen')->name('gTen');
        Route::view("/gEleven",'dashboard.user.gEleven')->name('gEleven');
        Route::view("/alMaths",'dashboard.user.alMaths')->name('alMaths');
        Route::view("/alBio",'dashboard.user.alBio')->name('alBio');
        Route::view("/alCommerce",'dashboard.user.alCommerce')->name('alCommerce');

        // dulaksha end


      
        Route::get('/teachernotice',function() {
            $notices=App\Models\Notice::all();
            return view('dashboard.teacher.teachernotice')->with('notices',$notices);
           });
      //  Route::view("teachernotice",'dashboard.teacher.teachernotice')->name('teachernotice');
        Route::get('/teachernotice',[NoticeController::class,'fetchtn'])->name('teachernotice');
        Route::view("addnotice",'dashboard.teacher.addnotice')->name('addnotice');
        Route::view("addnotification",'dashboard.teacher.addnotification')->name('addnotification');
        Route::post('Notification/save',[NotificationController::class,'save'])->name('Notification.save');
        Route::get('noticemanage',[NoticeController::class,'save']);

        Route::post('Notice/save',[NoticeController::class,'save'])->name('Notice.save');
        Route::get('/noticemanage',[NoticeController::class,'save'])->name('noticemanage');
        Route::get('/delete/{id}',[NoticeController::class,'delete'])->name('delete/{id}');
        Route::get('/get-teacher-notices',[NPDFController::class,'getTeachNotices'])->name('get-teacher-notices');
        //Route::post('Notice/save',[NoticeController::class,'save'])->name('Notice.save');

    

   



        //Update purpose only
        Route::get('teacher-edit/{id}', [TeacherController::class, 'teacherShowData']);
        Route::post('teacher-edit/', [TeacherController::class, 'teacherUpdateData']);

        //------------dulsara---------------------------------------------------------------------------
            


                //add lesson
        



                //add lesson
        

        //======================Yuchira====================================================================================
        
        Route::get('/view_papers', function () {
            $data=App\Models\Paper::all();
            return view('dashboard.teacher.view_papers')->with('papers',$data);
        });

        Route::get('/view_libraryitems', function () {
            $data=App\Models\Libraryitem::all();
            return view('dashboard.teacher.view_libraryitems')->with('libraryitems',$data);
        });


        Route::get('/libraryHome', function (){
            $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
            $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
            $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
            $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
            $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
            $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
            $libraryitem7 = DB::table('materials')->count();
            

            return view('dashboard.teacher.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7'));
        });

        Route::get('/view_materials', function () {
            $data=App\Models\Material::all();
            return view('dashboard.teacher.view_materials')->with('materials',$data);
        });

        //add lesson

 
    //======================Yuchira====================================================================================

        Route::get('/view_papers', function () {
             $data=App\Models\Paper::all();
             return view('dashboard.teacher.view_papers')->with('papers',$data);
        });


        Route::get('/view_libraryitems', function () {
             $data=App\Models\Libraryitem::all();
             return view('dashboard.teacher.view_libraryitems')->with('libraryitems',$data);
        });

        Route::get('/view_materials', function () {
              $data=App\Models\Material::all();
              return view('dashboard.teacher.view_materials')->with('materials',$data);
        });






        //======================Yuchira====================================================================================
 

        ///rajith's codes start
        Route::get('/add-exam', function () {
            $data=App\Models\Eclass::all();
            return view('dashboard.teacher.add-exam')->with('addexam',$data);
        });
        
        Route::get('/manage-exam', function () {
            $data=App\Models\Exam::all()->where('e_type','MCQ');
            return view('dashboard.teacher.manage-exam')->with('manageexam',$data);
        });

        Route::get('/manage-essay-exam', function () {
            $data=App\Models\Exam::all()->where('e_type','Essay');
            return view('dashboard.teacher.manage-essay-exam')->with('manageexam',$data);
        });


        Route::get('/add-question', function () {
            return view('dashboard.teacher.add-question');
        });

        // Route::view('/mark-attendance', 'dashboard.teacher.mark-attendance')->name('mark-attendance');

        //Route to view the student list to search function 
        Route::get('/mark-attendance', [AttendanceStudentList::class, 'AttendanceStudentList'])->name('mark-attendance');
        Route::get('/search-student', [AttendanceStudentList::class, 'searchStudent'])->name('search-student');

        // Add that particular student's attendance to the attendance table
        Route::get('/create-attendance', [AttendanceStudentList::class, 'createAttendance'])->name('create-attendance');
        Route::get('/student-attendance-details/{id}', [AttendanceStudentList::class, 'createAttendanceShowData'])->name('student-attendance-details');
        
        //Report making
        // Route::get('/search-student/{id}', [AttendanceReportController::class, 'attendanceListShowData'])->name('search-student');
       
        Route::post('/student-attendance-details', [AttendanceStudentList::class, 'addAttendanceData'])->name('student-attendance-details');

        Route::get('/attendance-report', [AttendanceReportController::class, 'getAttendance'])->name('attendance-report');

        Route::get('/download-pdf', [AttendanceReportController::class, 'downloadPDF'])->name('download-pdf');
        // ------------------------------------
/*        Route::get('/approve-result', function () {
            $data=App\Models\Examanswer::all();
            return view('dashboard.teacher.approve-result')->with('student',$data);
        });*/

        Route::get('/approve-result', function () {
            $data=App\Models\Exam::all()->where('e_type','MCQ');;
            return view('dashboard.teacher.approve-result')->with('manageexam',$data);
        });

        Route::get('/manage-essayq-marks', function () {
            $data=App\Models\Exam::all()->where('e_type','Essay');;
            return view('dashboard.teacher.manage-essayq-marks')->with('manageexam',$data);
        });

        Route::match(['get', 'post'],'/addQuestion/{id}', [ExamController::class, 'addQuestions']);

        Route::match(['get', 'post'],'/deleteExam/{id}', [ExamController::class, 'deleteExam']);

        Route::match(['get', 'post'],'/editExam/{id}', [ExamController::class, 'editExam']);

        Route::match(['get', 'post'], 'Exam/updateExam', [ExamController::class, 'updateExam'])->name('Exam.update');

        Route::match(['get', 'post'], 'addque', [EquestionController::class, 'addque'])->name('Equestion.add');

        Route::match(['get', 'post'], '/viewQuestion/{id}', [EquestionController::class, 'managequestion']);

        Route::match(['get', 'post'],'/editQuestion/{id}', [EquestionController::class, 'editQuestion']);

        Route::match(['get', 'post'],'/deleteQuestion/{id}', [EquestionController::class, 'deleteQuestion']);

        Route::match(['get', 'post'], 'Equestion/updateQuestion', [EquestionController::class, 'updateQuestion'])->name('Question.update');

        Route::match(['get', 'post'], '/addEssayQuestion/{id}', [ExamController::class,'addEssayQuestion']);

        Route::match(['get', 'post'], 'addessayque', [ExamController::class, 'addessayque'])->name('Essayquestion.add');

        Route::get('/view-essay-question', function () {
            return view('dashboard.teacher.view-essay-question');
        });

        Route::match(['get', 'post'], '/viewEssayQuestion/{id}', [EquestionController::class, 'manageessayquestion']);

        Route::match(['get', 'post'],'/editEssayQuestion/{id}', [EquestionController::class, 'editEssayQuestion']);

        Route::match(['get', 'post'], '/Essayquestion/updateEssayQuestion', [EquestionController::class, 'updateEssayQuestion'])->name('EQuestion.update');

        Route::match(['get', 'post'],'/deleteEQuestion/{id}', [EquestionController::class, 'deleteEQuestion']);

        Route::match(['get', 'post'], 'answer/save', [EquestionController::class, 'addanswer'])->name('answer/save');

        Route::match(['get', 'post'], '/viewResults/{id}', [ExamController::class, 'manageResult']);

        Route::match(['get', 'post'], '/viewEssayQResults/{id}', [ExamController::class, 'manageEssayQResult']);
        
        Route::match(['get', 'post'], '/viewStdAnswer/{id}/{e_id}', [ExamController::class, 'viewStdAnswer']);

        Route::match(['get', 'post'], '/approveStdAnswer/{id}', [ExamController::class, 'approveStdAnswer']);

        Route::match(['get', 'post'], '/viewStdEssayAnswer/{id}', [ExamController::class, 'viewStdEssayAnswer']);


        ///rajith's codes end

        Route::get('/search', function(){
            return view('dashboard.teacher.classmaking');
        });

        Route::get('/Ladd', function(){
            return view('dashboard.teacher.addLessons');
        });
        
        //report dulsaraa
        Route::get('/get-report', [addLessonController::class, 'classRepo']);

        //report search
        Route::post('/search-stID', [classmakingController::class, 'searchstID'])->name('searchstID');

        Route::get('/download-classReportpdf', [addLessonController::class, 'downloadRep']);

         //file lesson adding method
         Route::post('/store', [addLessonController::class, 'store'])->name('store');

        
        //manage lessons 
        Route::get('/edit-lesson', function(){

         $data=App\Models\Lesson::all();
         return view('dashboard.teacher.editLessons')->with('lesson', $data);
        });

        //delete lessons
        Route::get('/deleteL/{id}', [addLessonController::class, 'delete'])->name('delete');


        //file seen all
        Route::get('/file', [addLessonController::class, 'index'])->name('index');
        Route::get('/view/{id}', [addLessonController::class, 'show'])->name('show');
        Route::get('/file/download/{file}', [addLessonController::class, 'downloadf'])->name('downloadf');          

        //edit lessons
        Route::get('editL/{id}', [addLessonController::class, 'update'])->name('update');
        Route::post('/edit',[addLessonController::class, 'editLessonshow'])->name('editLessonshow');//retrieve 

        //////redirect to the lesson search page
        Route::get('/Lsearch', [addLessonController::class, 'Lsearch'])->name('Lsearch');   



         //add class
         Route::get('/search', function(){
            return view('dashboard.teacher.classmaking');
        });

        Route::post('Eclass/classmake',[classmakingController::class,'classmake'])->name('Eclass.classmake'); 
        
       //manage classes(update,delete page)
        Route::get('/edit-class', function(){
        $data=App\Models\Eclass::all();
        return view('dashboard.teacher.editClass')->with('class', $data);
        });

        //delete, update view method classes
        Route::get('/delete-class/{cid}', [classmakingController::class,'delete'])->name('delete');
        Route::get('/update/{id}', [classmakingController::class,'update'])->name('update');
        Route::post('/update', [classmakingController::class,'updateshow'])->name('updateshow');




   



        //search lessons
        Route::post('/search-lessons',[classmakingController::class, 'searchL'])->name('searchL');
       

      


    //------------------------------------------dulsara end------------------------------------------
    

      


        Route::get('/libraryHome', function (){
            $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
            $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
            $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
            $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
            $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
            $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
            $libraryitem7 = DB::table('materials')->count();
    
            return view('dashboard.teacher.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7'));
        });

        Route::get('/view_materials', function () {
            $data=App\Models\Material::all();
            return view('dashboard.teacher.view_materials')->with('materials',$data);
        });


        Route::get('/manage_materials', function () {
            $data=App\Models\Material::all();
            return view('dashboard.teacher.manage_materials')->with('materials',$data);
        });
        Route::post('/save_material', [MaterialController::class, 'storematerial'])->name('save_material');

        //Manage teacher Materials-----------------------------------------------------------------------------


        Route::get('/deletematerial/{id}', [MaterialController::class, 'deletematerial']);
        Route::get('/updatematerial/{id}', [MaterialController::class, 'updatematerialview']);
        Route::post('/updatematerials',[MaterialController::class, 'updatematerial'])->name('updatematerials');
        Route::get('/MaterialSearch',[MaterialController::class,'search']);
    });
  
});




Route::view('teacher/forgot-password', 'dashboard.teacher.forgot-password')->name('teacher-forgot-password');
Route::view('teacher/reset-password', 'dashboard.teacher.reset-password')->name('teacher-reset-password');






// Accountant Routes
Route::prefix('accountant')->name('accountant.')->group(function() {

    Route::middleware(['guest:accountant', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.accountant.login')->name('login');
        Route::post('/check', [AccountantController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:accountant', 'PreventBackHistory'])->group(function(){
        //Retreiveing specific admin
        Route::get('/home', [AccountantController::class, 'accountantList'])->name('home');
        //
        Route::post('/logout', [AccountantController::class, 'logout'])->name('logout');


          //financial
          Route::get('/salary',function() {
            return view('dashboard.accountant.addSalaryDetails');
           });

         
        //Update purpose only
        Route::get('accountant-edit/{id}', [AccountantController::class, 'accountantShowData']);
        Route::post('accountant-edit/', [AccountantController::class, 'accountantUpdateData']);

        //Delete purpose only
        // Route::get('accountant/home', [AccountantController::class, 'accountantList']);
        // Route::get('admin/home/{id}', [AdminController::class, 'adminDelete']);

    });
});

Route::view('accountant/forgot-password', 'dashboard.accountant.forgot-password')->name('accountant-forgot-password');
Route::view('accountant/reset-password', 'dashboard.accountant.reset-password')->name('accountant-reset-password');

// Librarian Routes
Route::prefix('librarian')->name('librarian.')->group(function() {
    
    Route::middleware(['guest:librarian', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.librarian.login')->name('login');
        Route::post('/check', [LibrarianController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:librarian', 'PreventBackHistory'])->group(function(){
        //Retreiveing specific admin
        Route::get('/home', [LibrarianController::class, 'librarianList'])->name('home');
        //
        Route::post('/logout', [LibrarianController::class, 'logout'])->name('logout');


        //Update purpose only
        Route::get('librarian-edit/{id}', [LibrarianController::class, 'librarianShowData']);
        Route::post('librarian-edit/', [LibrarianController::class, 'librarianUpdateData']);


      //Manage Library items------------------------------------------------------------------------
        Route::get('/manage_libraryitems', function () {
            $data=App\Models\Libraryitem::all();
            return view('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data);
        });

        Route::post('/save_libraryitem', [LibraryitemController::class, 'storelibraryitem'])->name('save_libraryitem');
        Route::get('/deletelibraryitem/{id}', [LibraryitemController::class, 'deletelibraryitem']);
        Route::get('/updatelibraryitem/{id}', [LibraryitemController::class, 'updatelibraryitemview']);
        Route::post('/updatelibraryitems',[LibraryitemController::class, 'updatelibraryitem'])->name('updatelibraryitems');
        Route::get('/libraryItemSearch',[LibraryitemController::class,'search']);



        //Manage Papers---------------------------------------------------------------------
       
       Route::get('/manage_papers', function () {
           $data=App\Models\Paper::all();
               return view('dashboard.librarian.manage_papers')->with('papers',$data);
          });
         Route::post('/save_paper', [PaperController::class, 'storepaper'])->name('save_paper');
         Route::get('/deletepaper/{id}', [PaperController::class, 'deletepaper']);
         Route::get('/updatepaper/{id}', [PaperController::class, 'updatepaperview']);
         Route::post('/updatepapers',[PaperController::class, 'updatepaper'])->name('updatepapers');
         Route::get('/PaperSearch',[PaperController::class,'search']);



         //Manage Feedbacks-----------------------------------------------------------------
         Route::get('/manage_feedbacks', function () {
            $data=App\Models\Feedback::all();
            return view('dashboard.librarian.manage_feedbacks')->with('feedbacks',$data);
        });
        
        Route::get('/deletefeedback/{id}', [FeedbackController::class, 'deletefeedback']);

        Route::get('/manage_feedbacks', function () {
            $data=App\Models\Feedback::all();
            return view('dashboard.librarian.manage_feedbacks')->with('feedbacks',$data);
        });
        
        //Manage LibraryHome-----------------------------------------------------------------------------
        Route::get('/libraryHome', function (){
             $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
             $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
             $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
             $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
             $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
             $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
             $libraryitem7 = DB::table('materials')->count();
             $feedback1 = DB::table('feedback')->where('Feed_type','Positive')->count();
             $feedback2 = DB::table('feedback')->where('Feed_type','Negative')->count();
             $feedback3 = DB::table('feedback')->where('Feed_type','Neutral')->count();
             $w = 100;
             return view('dashboard.librarian.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w'));
        });



        //Manage LibraryHome-----------------------------------------------------------------------------
        Route::get('/libraryhomereport', function (){
             $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
             $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
             $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
             $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
             $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
             $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
             $libraryitem7 = DB::table('materials')->count();
             $feedback1 = DB::table('feedback')->where('Feed_type','Positive')->count();
             $feedback2 = DB::table('feedback')->where('Feed_type','Negative')->count();
             $feedback3 = DB::table('feedback')->where('Feed_type','Neutral')->count();
             $mytime = Carbon\Carbon::now();
             $w = 100;
             return view('dashboard.librarian.libraryhomereport',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w','mytime'));
        });
        

        Route::get('/libraryhomereport1', function (){
            $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
            $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
            $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
            $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
            $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
            $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
            $libraryitem7 = DB::table('materials')->count();
            $feedback1 = DB::table('feedback')->where('Feed_type','Positive')->count();
            $feedback2 = DB::table('feedback')->where('Feed_type','Negative')->count();
            $feedback3 = DB::table('feedback')->where('Feed_type','Neutral')->count();
            $mytime = Carbon\Carbon::now();
            $w = 100;
            return view('dashboard.librarian.libraryhomereport1',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w','mytime'));
       });

        //Report Generation (home pdf)------------------------------------------------------------------------------------
        Route::get('/download-pdf2',[LibraryHomeController::class,'downloadPDF2']);
 
        //Manage Materials-----------------------------------------------------------------------------
        Route::get('/manage_materials', function () {
             $data=App\Models\Material::all();
             return view('dashboard.librarian.manage_materials')->with('materials',$data);
        });

        Route::get('/deletematerial/{id}', [MaterialController::class, 'deletematerial']);
        Route::get('/updatematerial/{id}', [MaterialController::class, 'updatematerialview']);
        Route::post('/updatematerials',[MaterialController::class, 'updatematerial'])->name('updatematerials');
        Route::get('/MaterialSearch',[MaterialController::class,'search']);

   
   


    });
   
});




Route::view('librarian/forgot-password', 'dashboard.librarian.forgot-password')->name('librarian-forgot-password');
Route::view('librarian/reset-password', 'dashboard.librarian.reset-password')->name('librarian-reset-password');


Route::view("select-type",'select-type')->name('select-type');

Route::view("select-type-login",'select-type-login')->name('select-type-login');

Route::view("register-student",'register-student');

Route::post('Student/addStudent', [registerStudentController::class, 'addStudent'])->name('Student.addStudent');

Route::view("register-teacher",'register-teacher');

Route::post('Teacher/addTeacher', [registerTeacherController::class, 'addTeacher'])->name('Teacher.addTeacher');






Route::get('users',[UserController::class,'index']);






//monadi


Route::view("dbcheck",'dbcheck');

Route::get('users',[UserController::class,'index']);

Route::view("addnotice",'addnotice');
Route::view("noticemanage",'noticemanage');
//Route::post('/save_data','NoticeController@save');

//Route::get('/ActiveCompleted/{id}','NoticeController@updateActive');

Route::get('noticemanage',[NoticeController::class,'save']);

Route::post('Notice/save',[NoticeController::class,'save'])->name('Notice.save');


Route::get('deleten/{id}',[NoticeController::class,'deleten']);
Route::get('editnotice/{id}',[NoticeController::class,'showdata']);
Route::post('updatenotice',[NoticeController::class,'update']);


Route::view("studentnotice",'studentnotice');

//Route::get('/studentnotice',[NoticeController::class,'fetchsn']);
Route::get('/teachernotice',[NoticeController::class,'fetchtn']);
Route::get('/search',[NoticeController::class,'search']);
Route::get('/studentsearch',[NoticeController::class,'studentsearch']);
Route::get('/teachersearch',[NoticeController::class,'teachersearch']);
Route::get('/searchall',[NoticeController::class,'searchall']);
Route::get('delete/{id}',[NoticeController::class,'delete']);

//Feedback
//Student side
Route::get('/feedback_form', function () {
    return view('feedback_form');
});
Route::post('/saveFeedback', [FeedbackController::class, 'store']);

//Librarian side
Route::get('/manage_feedbacks', function () {
    $data=App\Models\Feedback::all();
    return view('manage_feedbacks')->with('feedbacks',$data);
});

Route::get('/deletefeedback/{id}', [FeedbackController::class, 'deletefeedback']);



//Manage Papers
//Librarian side
Route::get('/manage_papers', function () {
    $data=App\Models\Paper::all();
    return view('manage_papers')->with('papers',$data);
});
Route::post('/save_paper', [PaperController::class, 'storepaper']);
Route::get('/deletepaper/{id}', [PaperController::class, 'deletepaper']);
Route::get('/updatepaper/{id}', [PaperController::class, 'updatepaperview']);
Route::post('/updatepapers',[PaperController::class, 'updatepaper']);
//Student side
Route::get('/view_papers', function () {
    $data=App\Models\Paper::all();
    return view('view_papers')->with('papers',$data);
});

//Manage Library Items
//Librarian side
Route::post('/save_libraryitem', [LibraryitemController::class, 'storelibraryitem']);
Route::get('/deletelibraryitem/{id}', [LibraryitemController::class, 'deletelibraryitem']);
Route::get('/updatelibraryitem/{id}', [LibraryitemController::class, 'updatelibraryitemview']);
Route::post('/updatelibraryitems',[LibraryitemController::class, 'updatelibraryitem']);
//Student side
Route::get('/view_libraryitems', function () {
    $data=App\Models\Libraryitem::all();
    return view('view_libraryitems')->with('libraryitems',$data);
});


Route::get('users',[UserController::class,'index']);

// End of Joel's Routes






/*------------------------------------ dulaksha's code start--------------------------------------------------*/


Route::view("addnotification",'addnotification');
Route::view("notificationmanage",'notificationmanage');

//Route::post('notificationmanage',[NotificationController::class,'save']);
Route::post('Notification/save',[NotificationController::class,'save'])->name('Notification.save');
Route::get('delete/{id}',[NotificationController::class,'delete']);
Route::get('edit/{id}',[NotificationController::class,'showData']);
Route::post('editnotification',[NotificationController::class,'update']);

Route::get('/send-email',[MailController::class,'sendEmail']);
Route::get('sendmail/{id}',[NotificationController::class,'shownoti']);
Route::post('/contact',function(){
    $data = request(['Title','Notification','Email']);
    Mail::to($data['Email'])
    ->send(new \App\Mail\TestMail($data));

    return view('/emails.success');
});
   
Route::get('sendnotification/{id}',[NotificationController::class,'showemail']);

//Route::get('/send',[NotificationController::class,'showemail']);
//Route::get('show',[NotificationController::class,'showemail']);
Route::get('/sms',[NotificationController::class,'index']);

//report
Route::get('/get-all-notices',[NPDFController::class,'getAllNotices']);
Route::get('/download-pdf',[NPDFController::class,'downloadPDF']);

Route::get('/get-teacher-notices',[NPDFController::class,'getTeachNotices']);
Route::get('/download-tpdf',[NPDFController::class,'downloadtPDF']);
//end monadi

Route::view("createschedule",'createschedule');
//Route::post('/saveCreate','CreateController@store');
Route::post('Schedule/store',[CreateController::class, 'store'])->name('Schedule.store');

Route::get('edit',[CreateController::class,'edit']);
Route::get('delete/{id}',[CreateController::class,'delete']);
Route::get('scheduleUpdate/{id}',[CreateController::class,'showData']);
Route::post('scheduleUpdate',[CreateController::class,'updateData'])->name('Schedule.update');


Route::view("publicTable",'publicTable');



Route::view("gSix",'gSix');
Route::view("gSeven",'gSeven');
Route::view("gEight",'gEight');
Route::view("gNine",'gNine');
Route::view("gTen",'gTen');
Route::view("gEleven",'gEleven');
Route::view("alMaths",'alMaths');
Route::view("alBio",'alBio');
Route::view("alCommerce",'alCommerce');

Route::view("teacherSchedule",'teacherSchedule');
// Route::view("studentSchedule",'studentSchedule');

Route::get('teacherSchedule',[CreateController::class,'teacherScheduleData']);
// Route::get('studentSchedule',[CreateController::class,'studentScheduleData']);

Route::get('scheduleSearch',[CreateController::class,'search']);
// Route::get('/scheduleSearch','CreateController@search');

Route::get('editDownload',[CreateController::class,'editDownloadPdf']);
Route::get('pdfDownload',[CreateController::class,'pdfDownload']);



/*------------------------------------ dulaksha's code end--------------------------------------------------*/





//----------------------------------------dulsara------------------------------------------------------------------------------------------------------
Route::get('/he',function()
{
    return view('head');
});

///////report 
Route::get('/get-report', [addLessonController::class, 'classRepo']);

Route::get('/download-classReportpdf', [addLessonController::class, 'downloadRep']);

///////class adding
Route::get('/search', function(){
    return view('classmaking');
});

Route::post('Eclass/classmake',[classmakingController::class,'classmake'])->name('Eclass.classmake');

//view class form
Route::get('/Cview', function(){
    return view('classview');
});


/// //report search
 Route::get('/search-stID', [classmakingController::class, 'searchstID']);

///////Lesson adding form
Route::get('/Ladd', function(){
    return view('addLessons');
});
//Lesson adding form

// Route::prefix('admin')->name('admin.')->group(function(){

//             Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function() {
//                 Route::view('/login', 'dashboard.admin.login')->name('login');
//                 Route::post('/check', [AdminController::class, 'check'])->name('check');
//             });

//             Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function() {

//     });
// });











Route::get('/add-newL', function()
{
    return view('addnewLessons');
});


///////file lesson adding method
Route::post('/store', [addLessonController::class, 'store'])->name('store');

//////redirect to the lesson search page
Route::get('/Lsearch', [addLessonController::class, 'Lsearch'])->name('Lsearch');

///////math
Route::get('/math', [classmakingController::class, 'Math'])->name('Math');
///////science clz
Route::get('/science', [classmakingController::class, 'science'])->name('science');
//////ICT clz
Route::get('/ICT', [classmakingController::class, 'ICT'])->name('ICT');
//////sinhala clz
Route::get('/Sinhala', [classmakingController::class, 'Sinhala'])->name('Sinhala');
////english
Route::get('/English', [classmakingController::class, 'English'])->name('English');
/////Tamil
Route::get('/Tamil', [classmakingController::class, 'Tamil'])->name('Tamil');
/////Music
Route::get('/Music', [classmakingController::class, 'Music'])->name('Music');
////History
Route::get('/History', [classmakingController::class, 'History'])->name('History');
/////Literature
Route::get('/Elit', [classmakingController::class, 'Elit'])->name('Elit');
/////comz
Route::get('/Commerce', [classmakingController::class, 'Commerce'])->name('Commerce');

//////physics
Route::get('/Physics', [classmakingController::class, 'Physics']);
//Biology 
Route::get('/Biology', [classmakingController::class, 'Biology']);
/////chemistry
Route::get('/Chemistry', [classmakingController::class, 'Chemistry']);
/////physics ppr clz
Route::get('/physics-paper', [classmakingController::class, 'phypaper']);
/////che,istry ppr clz
Route::get('/chemistry-paper', [classmakingController::class, 'chempaper']);
/////bio ppr clz
Route::get('/bio-paper', [classmakingController::class, 'biopaper']);

/////com math clz
Route::get('/Com-math', [classmakingController::class, 'comMath']);
////com ppr clz
Route::get('/Com-ppr', [classmakingController::class, 'comppr']);


//Bs  clz
Route::get('/BS', [classmakingController::class, 'BS']);
//Accounting  clz
Route::get('/AC', [classmakingController::class, 'AC']);
//Econ  clz
Route::get('/Econ', [classmakingController::class, 'Econ']);

/////Bs  ppr clz
Route::get('/BSppr', [classmakingController::class, 'BSppr']);
/////AC ppr clz
Route::get('/ACppr', [classmakingController::class, 'ACppr']);
////Econppr ppr clz
Route::get('/ECppr', [classmakingController::class, 'ECppr']);


//filter 
Route::get('/getLesson', [addLessonController::class, 'getLesson']);

Route::get('/update/{id}', [classmakingController::class,'update'])->name('update');
Route::post('/update', [classmakingController::class,'updateshow'])->name('updateshow');


//filter page
//Route::get('/filter',[addLessonController::class,'filter'])->name('filter');


//view download lessons route
Route::get('/index', [addLessonController::class, 'index'])->name('index');
Route::post('/index', [addLessonController::class,'index'])->name('index');
Route::get('/index', function(){
return view('studentLessonview');
});

//report
Route::get('/class-report', function(){
    return view('classReport');
    });

//////////////manage lessons 
Route::get('/edit-lesson', function(){

    $data=App\Models\Lesson::all();
    return view('editLessons')->with('lesson', $data);
});

//delete lessons
Route::get('/deleteL/{id}', [addLessonController::class, 'delete'])->name('delete');

//edit lessons
Route::get('editL/{id}', [addLessonController::class, 'update'])->name('update');
Route::post('/edit',[addLessonController::class, 'editLessonshow'])->name('editLessonshow');


/////////////
Route::get('/common-class', function(){
    return view('commonClassPage');
});

//////////////ol class list blade
Route::get('/class-list', function(){
    return view('classList');
});


//////Biology class list blade
Route::get('/bio-classes', function()
{
    return view('BioClassList');
});

/////////Physical science class list blade
Route::get('/physical-classes', function()
{
    return view('PhysicalClasses');
});
//////common classes page
Route::get('/common-classes', function(){
    return view('commonClassPage');
});

//getsubject with join
//Route::get('/get-subjectjoin', [addLessonController::class, 'getsubjectjoin' ]);


/////redirect 6-11 class
Route::get('/redirect-ol', function(){
    return view('classList');
});

/////redirect Biology class
Route::get('/redirect-bio', function(){
    return view('BioClassList');
});

/////redirect physical science class
Route::get('/redirect-phy', function(){
    return view('PhysicalClasses');
});

/////redirect cmz science class
Route::get('/redirect-cmz', function(){
    return view('commerceClasses');
});

//manage classes(update,delete page)
Route::get('/edit-class', function(){

    $data=App\Models\Eclass::all();
    return view('editClass')->with('class', $data);
});

//delete, update view method classes
Route::get('/delete-class/{cid}', [classmakingController::class,'delete'])->name('delete');
Route::get('/update/{id}', [classmakingController::class,'update'])->name('update');
Route::post('/update', [classmakingController::class,'updateshow'])->name('updateshow');


Route::get('view-class/{cid}', [viewClassController::class, 'view'])->name('view');

Route::get('/view-class', function(){
    $task=App\Models\Eclass::all();
    return view('viewclass')->with('class', $task);
});

//search lessons
Route::post('/search-lessons',[classmakingController::class, 'searchL'])->name('searchL');
//searchsubject
Route::post('/search-subject',[addLessonController::class, 'searchsubject'])->name('searchsubject');

//file seen all
Route::get('/file', [addLessonController::class, 'index'])->name('index');
Route::get('/view/{id}', [addLessonController::class, 'show'])->name('show');
Route::get('/file/download/{file}', [addLessonController::class, 'downloadf'])->name('downloadf');



Route::get('/join', [joinclassLessonController::class, 'join'])->name('join');


Route::get('/add-vedio', function(){
    return view('add-vedio');
});

Route::post('/stdAttachment', [AttachmentController::class, 'addvedio'])->name('addvedio');


Route::get('/Ladd', function(){
    return view('/addLessons');
});
//-----------------------------------------dulsara end---------------------------------------------------------------------------------------------------------














//Route::view("select-type",'select-type');

//Route::view("register-student",'register-student');

//Route::post('Student/addStudent', [registerStudentController::class, 'addStudent'])->name('Student.addStudent');

//Route::view("register-teacher",'register-teacher');

//Route::post('Teacher/addTeacher', [registerTeacherController::class, 'addTeacher'])->name('Teacher.addTeacher');


//Route::get('users',[UserController::class,'index']);











// End of Joel's Routes






/* rajith's code start*/

/////////////////////////////////////////////////////////////////////

Route::get('/add-exam', function () {
    $data=App\Models\Eclass::all();
    return view('/add-exam')->with('addexam',$data);
});

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'Exam/store', [ExamController::class, 'store'])->name('Exam.store');

/////////////////////////////////////////////////////////////////////

Route::get('/manage-exam', function () {
    $data=App\Models\Exam::all()->where('e_type','MCQ');
    return view('/manage-exam')->with('manageexam',$data);
});

/////////////////////////////finish////////////////////////////////////////

Route::get('/manage-essay-exam', function () {
    $data=App\Models\Exam::all()->where('e_type','Essay');
    return view('/manage-essay-exam')->with('manageexam',$data);
});

/////////////////////////////finish////////////////////////////////////////




Route::get('/view-question', function () {
    return view('/view-question');
});
/////////////////////////////finish////////////////////////////////////////



Route::get('/add-question', function () {
    return view('/add-question');
});
/*rajith's code end */


/*Yuchira's code second update start*/

Route::get('/libraryHome', function (){
    $libraryitem1 = DB::table('libraryitems')->where('item_type','Educational PDF')->count();
    $libraryitem2 = DB::table('papers')->count();

    return view('libraryHome',compact('libraryitem1','libraryitem2'));
});

/////////////////////////////finish////////////////////////////////////////



Route::match(['get', 'post'],'addQuestion/{id}', [ExamController::class, 'addQuestions']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'],'deleteExam/{id}', [ExamController::class, 'deleteExam']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'],'editExam/{id}', [ExamController::class, 'editExam']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'addque', [EquestionController::class, 'addque'])->name('Equestion.add');

/////////////////////////////finish////////////////////////////////////////

//Route::match(['get', 'post'], 'addessayque', [ExamController::class, 'addessayque'])->name('Essayquestion.add');

Route::match(['get', 'post'], 'viewQuestion/{id}', [EquestionController::class, 'managequestion']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'],'deleteQuestion/{id}', [EquestionController::class, 'deleteQuestion']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'Exam/updateExam', [ExamController::class, 'updateExam'])->name('Exam.update');

/////////////////////////////finish////////////////////////////////////////


Route::match(['get', 'post'],'editQuestion/{id}', [EquestionController::class, 'editQuestion']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'Equestion/updateQuestion', [EquestionController::class, 'updateQuestion'])->name('Question.update');

/////////////////////////////finish////////////////////////////////////////


Route::get('/view-exam', function () {
    $data=App\Models\Exam::all()->where('e_type', '=', 'MCQ');
    return view('/view-exam')->with('viewexam',$data);
});

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'],'getExam/{id}', [ExamController::class, 'getExam']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'Exam/checkEkey', [ExamController::class, 'checkEkey'])->name('Exam.checkEkey');

Route::get('/e-instructions', function () {
    return view('e-instructions');
});

Route::match(['get', 'post'], 'Exam/checkEssayQEkey', [ExamController::class, 'checkEssayQEkey'])->name('Exam.checkEssayQEkey');

Route::get('/testJS', function () {
    return view('testJS');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/addEssayQuestion/{id}', [ExamController::class,'addEssayQuestion']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'addessayque', [ExamController::class, 'addessayque'])->name('Essayquestion.add');

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'viewEssayQuestion/{id}', [EquestionController::class, 'manageessayquestion']);

/////////////////////////////finish////////////////////////////////////////

Route::get('/view-essay-exam', function () {
    $data=App\Models\Exam::all()->where('e_type', '=', 'Essay');
    return view('/view-essay-exam')->with('viewEssayExam',$data);
});

Route::get('/view-essay-question', function () {
    return view('/view-essay-question');
});

Route::match(['get', 'post'],'getEssayExam/{id}', [ExamController::class, 'getEssayExam']);

Route::match(['get', 'post'],'editEssayQuestion/{id}', [EquestionController::class, 'editEssayQuestion']);

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'Essayquestion/updateEssayQuestion', [EquestionController::class, 'updateEssayQuestion'])->name('EQuestion.update');

/////////////////////////////finish////////////////////////////////////////

Route::match(['get', 'post'], 'answer/save', [EquestionController::class, 'addanswer'])->name('answer/save');

/////////////////////////////finish////////////////////////////////////////

Route::get('/search', [ExamController::class,'search']);

Route::get('/searchEssayExam', [ExamController::class,'searchEssayExam']);

Route::match(['get', 'post'], '/viewResults/{id}', [ExamController::class, 'manageResult']);

Route::match(['get', 'post'], '/viewStdAnswer/{id}/{e_id}', [ExamController::class, 'viewStdAnswer']);

Route::match(['get', 'post'], '/approveStdAnswer/{id}', [ExamController::class, 'approveStdAnswer']);

Route::match(['get', 'post'], 'approvedMarks', [ExamController::class, 'approvedMarks'])->name('Result.approvedMarks');

Route::match(['get', 'post'], 'essayanswer', [ExamController::class, 'essayanswer'])->name('Exam.essayanswer');

Route::match(['get', 'post'], 'approvedEssayQMarks', [ExamController::class, 'approvedEssayQMarks'])->name('Result.approvedEssayQMarks');

Route::match(['get', 'post'], '/finalResult/{std_id}', [ExamController::class, 'finalResult']);

Route::get('/download-pdf/{std_id}', [ExamController::class, 'downloadProgrseeReport']);

Route::get('/myExam/{std_id}', [ExamController::class, 'myExam']);

Route::get('/myAnswers/{std_id}/{e_id}', [ExamController::class, 'myAnswers']);


Route::get('/AnswerSheet-pdf/{std_id}/{e_id}', [ExamController::class, 'downloadAnswerSheet']);

//Manage MoreReading Materials
//Teacher side
Route::get('/manage_materials', function () {
    $data=App\Models\Material::all();
    return view('manage_materials')->with('materials',$data);
});
Route::post('/save_material', [MaterialController::class, 'storematerial']);
Route::get('/deletematerial/{id}', [MaterialController::class, 'deletematerial']);
Route::get('/updatematerial/{id}', [MaterialController::class, 'updatematerialview']);
Route::post('/updatematerials',[MaterialController::class, 'updatematerial']);
//Student side
Route::get('/view_materials', function () {
    $data=App\Models\Material::all();
    return view('view_materials')->with('materials',$data);
});


/*Yuchira's code second update end*/

/*rajith's code end */












/*financial management*/
Route::get('/salary',function() {
 return view('addSalaryDetails');
});
Route::post('/saveSalary', [addSalaryController::class, 'store']);

Route::get('/salarytable',function() {
    $data=App\Models\Financial_salary::all();
    return view('/salarytable')->with('data',$data);
   });

// Route::get('/salarytable', [addSalaryController::class, 'show']);

// Route::get('/editsalary',function() {
//     $salary=App\Models\Financial_salary::all();
//     return view('editsalary')->with('salary',$salary);
//    });

Route::get('/edit/{id}', [addSalaryController::class,'showData']);
Route::get('edit', [addSalaryController::class,'updatesalary']);

Route::get('/searchSalaryDetails',[addSalaryController::class, 'searchsalary']);


Route::get('/payment',function() {
    return view('AddPaymentDetails');
   });
 Route::post('/savePayment', [paymentcontroller::class, 'store']);

 Route::get('/paymenttable',function() {
    $data=App\Models\Financial_Payment::all();
    return view('paymenttable')->with('data',$data);
   });

 //Route::get('paymenttable', [paymentcontroller::class, 'show']);

Route::get('/download-pdf',[paymentcontroller::class, 'downloadPDF']);


Route::get('/searchPaymentDetails',[paymentcontroller::class, 'search']);

Route::get('/getPayment/{id}', [paymentcontroller::class,'showData1']);




Route::get('/paymentreport',function() {
    $data=App\Models\Financial_Payment::all();
    return view('paymentReport')->with('data',$data);
   });


/*financial management end*/










