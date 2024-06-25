<?php               

// use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookAppointmentController;
use Illuminate\Support\Facades\Route;      

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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');      
})->name('home');

Route::get('about', function () {
    return view('about');      
})->name('about');

Route::get('testimonial', function () {
    return view('testimonial');      
})->name('testimonial');

Route::get('contact', function () {
    return view('contact');      
})->name('contact');

Route::get('book-appointment', function () {
    return view('book-appointment');      
})->name('book-appointment');

// Conditions
Route::group(['prefix' => "conditions"], function () {
 
    // Ear root

    Route::get('ear/ear-wax-removal', function () {
        return view('conditions.ear-wax-removal'); 
    })->name('ear-wax-removal');

    Route::get('ear/foreign-body-ear-removal', function () {
        return view('conditions.foreign-body-ear-removal'); 
    })->name('foreign-body-ear-removal');

    Route::get('ear/ear-pain-treatment', function () {
        return view('conditions.ear-pain-treatment'); 
    })->name('ear-pain-treatment');

    Route::get('ear/ear-itching-treatment', function () {
        return view('conditions.ear-itching-treatment'); 
    })->name('ear-itching-treatment');

    Route::get('ear/eardrum-rupture-treatment', function () {
        return view('conditions.eardrum-rupture-treatment'); 
    })->name('eardrum-rupture-treatment');

    Route::get('ear/ear-infection-treatment', function () {
        return view('conditions.ear-infection-treatment'); 
    })->name('ear-infection-treatment');   

    Route::get('ear/middle-ear-medical-treatment', function () {
        return view('conditions.middle-ear-medical-treatment'); 
    })->name('middle-ear-medical-treatment');

    Route::get('ear/vertigo-dizziness-treatment', function () {
        return view('conditions.vertigo-dizziness-treatment'); 
    })->name('vertigo-dizziness-treatment');

    Route::get('ear/tinnitus-management', function () {
        return view('conditions.tinnitus-management'); 
    })->name('tinnitus-management');    
    
    Route::get('ear/hearing-loss-management', function () {
        return view('conditions.hearing-loss-management'); 
    })->name('hearing-loss-management'); 

    //  Nose root

    Route::get('nose/frequent-cold-nose-block', function () {
        return view('conditions.frequent-cold-nose-block'); 
    })->name('frequent-cold-nose-block'); 

    Route::get('nose/allergic-rhinitis', function () {
        return view('conditions.allergic-rhinitis'); 
    })->name('allergic-rhinitis'); 

    Route::get('nose/sinus-headaches', function () {
        return view('conditions.sinus-headaches'); 
    })->name('sinus-headaches'); 

    Route::get('nose/migraine-treatment', function () {
        return view('conditions.migraine-treatment'); 
    })->name('migraine-treatment'); 

    Route::get('nose/sinusitis', function () {
        return view('conditions.sinusitis'); 
    })->name('sinusitis'); 

    Route::get('nose/foreign-body-nose-removal', function () {
        return view('conditions.foreign-body-nose-removal'); 
    })->name('foreign-body-nose-removal'); 

    // Throat root

    Route::get('throat/throat-infection', function () {
        return view('conditions.throat-infection'); 
    })->name('throat-infection');

    Route::get('throat/chronic-cough', function () {
        return view('conditions.chronic-cough'); 
    })->name('chronic-cough'); 

    Route::get('throat/tonsillitis', function () {
        return view('conditions.tonsillitis'); 
    })->name('tonsillitis'); 

    Route::get('throat/adenoid-enlargement', function () {
        return view('conditions.adenoid-enlargement'); 
    })->name('adenoid-enlargement'); 

    Route::get('throat/hoarseness-voice', function () {
        return view('conditions.hoarseness-voice'); 
    })->name('hoarseness-voice'); 

    Route::get('throat/hyperacidity', function () {
        return view('conditions.hyperacidity'); 
    })->name('hyperacidity'); 

});       

// Surgery
Route::group(['prefix' => "surgery"], function () {
 
    // Ear root

    Route::get('ear/myringotomy-grommet-insertion', function () {
        return view('surgery.myringotomy-grommet-insertion'); 
    })->name('myringotomy-grommet-insertion');  
    
    Route::get('ear/tympanoplasty', function () {
        return view('surgery.tympanoplasty'); 
    })->name('tympanoplasty');  

    Route::get('ear/ossiculoplasty', function () {
        return view('surgery.ossiculoplasty'); 
    })->name('ossiculoplasty');  

    Route::get('ear/stapedotomy-stapedectomy', function () {
        return view('surgery.stapedotomy-stapedectomy'); 
    })->name('stapedotomy-stapedectomy');  

    Route::get('ear/mastoid-exploration-surgery', function () {
        return view('surgery.mastoid-exploration-surgery'); 
    })->name('mastoid-exploration-surgery');
    
    // Nose root  

    Route::get('nose/septoplasty', function () {
        return view('surgery.septoplasty'); 
    })->name('septoplasty'); 

    Route::get('nose/functional-endoscopic-sinus-surgery', function () {
        return view('surgery.functional-endoscopic-sinus-surgery'); 
    })->name('functional-endoscopic-sinus-surgery');  

    Route::get('nose/endo-dcr', function () {   
        return view('surgery.endo-dcr');    
    })->name('endo-dcr');      

    Route::get('nose/nasal-polyp-surgery', function () {   
        return view('surgery.nasal-polyp-surgery');    
    })->name('nasal-polyp-surgery');      
    
    // Throat root

    Route::get('throat/tonsil-adenoids-surgery', function () {
        return view('surgery.tonsil-adenoids-surgery'); 
    })->name('tonsil-adenoids-surgery');  
    
    Route::get('throat/adenoids-coblation-surgery', function () {
        return view('surgery.adenoids-coblation-surgery'); 
    })->name('adenoids-coblation-surgery');  

    Route::get('throat/adenoids-microdebrider-surgery', function () {
        return view('surgery.adenoids-microdebrider-surgery'); 
    })->name('adenoids-microdebrider-surgery');  

    Route::get('throat/laser-vocal-nodule-surgery', function () {
        return view('surgery.laser-vocal-nodule-surgery'); 
    })->name('laser-vocal-nodule-surgery');  

});      

Route::group(['prefix' => "speciality"], function () {        

    Route::get('/vertigo-clinic', function () {
        return view('speciality.vertigo-clinic'); 
    })->name('vertigo-clinic');

    Route::get('/tinnitus-clinic', function () {
        return view('speciality.tinnitus-clinic'); 
    })->name('tinnitus-clinic');

    Route::get('/hearing-speech-clinic', function () {
        return view('speciality.hearing-speech-clinic'); 
    })->name('hearing-speech-clinic');

    Route::get('/tm-joint-pain', function () {
        return view('speciality.tm-joint-pain'); 
    })->name('tm-joint-pain');

    Route::get('/allergy-sinusitis', function () {
        return view('speciality.allergy-sinusitis'); 
    })->name('allergy-sinusitis');

    Route::get('/pediatric-ent', function () {
        return view('speciality.pediatric-ent'); 
    })->name('pediatric-ent');

    Route::get('/snoring-osa-treatment', function () {
        return view('speciality.snoring-osa-treatment'); 
    })->name('snoring-osa-treatment');

});


// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');     
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
Route::post('/book-appointment/save', [BookAppointmentController::class, 'sendEmail'])->name('saveAappointment');