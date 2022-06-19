<?php

namespace app\controllers;

use RedBeanPHP\R as R;

class ServicesController extends AppController
{
	public function viewAction()
	{
		$serviceTypes = R::find( 'ServiceType');

		$alias = $this->route['alias'];

		if ($alias === 'priyem-vrachey') {
			$services = R::find('DoctorSpeciality');

			foreach ($services as $service) {
				$service['services'] = R::findMulti( 'Doctor_Speciality, Doctor_Service, Services',
					'
						SELECT Services.* FROM Services
    						INNER JOIN Doctor_Service ON Services.id = Doctor_Service.service_id
							INNER JOIN Doctor_Speciality ON Doctor_Service.doctor_id = Doctor_Speciality.doctor_id
						WHERE Doctor_Speciality.doctor_id = ? and Services.status = 1
						', [ $service['id']] );
			}
			$services['is_doctors'] = true;
		} else {
			$services = R::find('Services', 'type_id = ?', [(int)$serviceTypes]);
			$services['is_doctors'] = false;
		}

        $services['title'] = $serviceTypes[(int)$serviceTypes]['title'];

		$this->set(compact('serviceTypes', 'services'));
	}
}
