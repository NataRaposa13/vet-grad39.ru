<?php

namespace app\controllers;

use RedBeanPHP\R as R;

class DoctorsController extends AppController
{
	public function viewAction()
	{
		$serviceTypes = R::find( 'ServiceType');

		$doctors = R::getAll("
									SELECT Doctors.id, 
									       surname, 
									       name, 
									       patronymic, 
									       experience, 
									       title as 'category'
									FROM Doctors INNER JOIN DoctorsCategories ON Doctors.category_id = DoctorsCategories.id
									");

		$len = count($doctors);
		for ($i = 0; $i < $len; $i++) {
			$doctor_id = $doctors[$i]['id'];
			$doctors[$i]['specialities'] = R::getCol("
											SELECT DoctorSpeciality.title
											FROM Doctor_Speciality INNER JOIN DoctorSpeciality ON Doctor_Speciality.speciality_id = DoctorSpeciality.id
											WHERE Doctor_Speciality.doctor_id = ?
											", [$doctor_id]);
		}

		$this->set(compact('doctors', 'serviceTypes'));
	}

	public function doctorInfoAction()
	{
	}
}