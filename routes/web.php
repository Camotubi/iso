<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function() { return view('dashboard');});
Route::resources([
    'projects' => 'ProjectController',
    'projects.deliverables' => 'Project\DeliverableController',
    'projects.deliverables.metricDeliverables' => 'Project\Deliverable\MetricDeliverableController',
    'projects.deliverables.metricDeliverables.evaluations' => 'Project\Deliverable\MetricDeliverable\EvaluationController',
    'projects.deliverables.metricDeliverables.evaluations.measurements' => 'Project\Deliverable\MetricDeliverable\Evaluation\MeasurementController'
]);
