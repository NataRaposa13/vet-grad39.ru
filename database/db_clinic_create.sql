create table ServiceType
(
    id int auto_increment not null,
    title varchar(255) not null,
    alias varchar(255) not null,

    primary key(id)
);

create table Services
(
    id int auto_increment not null,
    title varchar(255) not null,
    description text not null,
    type_id int not null,
    cost float not null,
    startDate timestamp default current_timestamp,
    endDate timestamp,
    status bool default 1,

    primary key (id),
    foreign key fk_ServiceType (type_id)
        references ServiceType(id)
);

create table DoctorsCategories
(
    id int auto_increment not null,
    title varchar(255) not null,

    primary key (id)
);

create table Doctors
(
    id int auto_increment not null,
    surname varchar(255) not null,
    name varchar(255) not null,
    patronymic varchar(255),
    experience float,
    category_id int not null,
    allowanceAmount float,

    primary key (id),
    foreign key fk_CategoriesOfDoctors (category_id)
        references DoctorsCategories(id)
);

create table DoctorSpeciality
(
    id int auto_increment not null,
    title varchar(255) not null,

    primary key (id)
);

create table Doctor_Speciality
(
    doctor_id int,
    speciality_id int,

    foreign key fk_DoctorSpeciality(doctor_id)
        references Doctors(id),
    foreign key  fk_Speciality (speciality_id)
        references  DoctorSpeciality(id)
);

create table Doctor_Service
(
    doctor_id int not null,
    service_id int not null,
    costOfService int,

    foreign key fk_ServiceDoctor (doctor_id)
        references Doctors(id),
    foreign key fk_DoctorService (service_id)
        references Services(id)
);

create table ProfEducationLevels
(
    id int auto_increment not null,
    title varchar(255) not null,

    primary key (id)
);

create table ValueOfProfEducationLevels
(
    id int auto_increment not null,
    level_id int not null,
    value text,

    primary key (id),
    foreign key fk_ProfEducationLevels (level_id)
        references ProfEducationLevels(id)
);

create table Doctor_ProfEducationLevels
(
    doctor_id int not null,
    level_id int not null,

    foreign key fk_Doctor_ProfEducationLevels(doctor_id)
        references Doctors(id),
    foreign key fk_ProfEducationLevels_Doctor(level_id)
        references ValueOfProfEducationLevels(id)
);

create table Clinics
(
    id int auto_increment not null,
    title varchar(255),
    address varchar(255),
    telephone varchar(50),

    primary key (id)
);

create table WorkSchedules
(
    id int auto_increment not null,
    title varchar(255),

    primary key (id)
);

create table ClinicTimetable
(
    id int auto_increment not null,
    clinic_id int not null,
    workSchedules_id int not null,
    startTime time not null,
    endTime time not null,

    primary key (id),
    foreign key fk_ClinicTimetable(clinic_id)
        references Clinics(id),
    foreign key fk_WorkSchedules(workSchedules_id)
        references WorkSchedules(id)
);

create table DoctorTimetable
(
    id int auto_increment not null,
    doctor_id int not null,
    clinic_id int not null,
    workSchedules_id int not null,
    startTime time not null,
    endTime time not null,
    continuance time not null,

    primary key (id),
    foreign key fk_DoctorTimetable(doctor_id)
        references Doctors(id),
    foreign key fk_AddressClinic(clinic_id)
        references Clinics(id),
    foreign key fk_WorkSchedules(workSchedules_id)
        references WorkSchedules(id)
);

create table DocumentsForService
(
    id int auto_increment not null,
    title varchar(255) not null,
    comments text default null,

    primary key (id)
);

create table Services_Documents
(
    service_id int not null,
    document_id int not null,

    foreign key fk_ServicesDocuments (service_id)
        references Services(id),
    foreign key fk_DocumentsServices (document_id)
        references DocumentsForService (id)
);

create table Services_Clinics
(
    service_id int not null,
    clinic_id int not null,
    cabinet varchar(255) not null,
    workSchedules_id int not null,
    startTime time not null,
    endTime time not null,

    foreign key fk_ServicesClinics(service_id)
        references Services(id),
    foreign key fk_ClinicsServices(clinic_id)
        references Clinics(id),
    foreign key fk_WorkSchedules(workSchedules_id)
        references WorkSchedules(id)
);

create table Positions
(
    id int auto_increment not null,
    title varchar(255) not null,

    primary key (id)
);

create table Employees
(
    id int auto_increment not null,
    surname varchar(255) not null,
    name varchar(255) not null,
    patronymic varchar(255),
    position_id int not null,

    primary key (id),
    foreign key fk_Positions (position_id)
        references Positions(id)
);

create table Employees_Services
(
    employees_id int not null,
    service_id int not null,

    foreign key fk_Employees (employees_id)
        references Employees(id),
    foreign key fk_Services (service_id)
        references Services (id)
);

create table TypesOfAnimals
(
    id int auto_increment not null,
    title varchar(255) not null,

    primary key (id)
);

create table Patient
(
    id int auto_increment not null,
    name varchar(255),
    typeOfAnimal_id int not null,
    passportOfAnimal varchar(50),
    numberOfPatientCard varchar(50),
    photo varchar(255) default 'no_image',

    primary key (id),
    foreign key fk_TypeOfAnimal (typeOfAnimal_id)
        references TypesOfAnimals (id)
);

create table User
(
    id int auto_increment not null,
    surname varchar(255) not null,
    name varchar(255) not null,
    patronymic varchar(255),
    telephone varchar(50) not null,
    email varchar(255) not null,

    primary key (id)
);

create table Users_Patients
(
    user_id int not null,
    patient_id int not null,

    foreign key fk_Users_Patients (user_id)
        references User (id),
    foreign key fk_Patients_Users (patient_id)
        references Patient(id)
);

create table ServiceRegistration
(
    id int auto_increment not null,
    patient_id int not null,
    service_id int not null,
    employee_id int,
    clinic_id int not null,
    dateOfReceipt date not null,
    timeOfReceipt time not null,

    primary key (id),
    foreign key fk_PatientSignOnService (patient_id)
        references Patient (id),
    foreign key fk_EmployeeSignOnService(employee_id)
        references Employees (id),
    foreign key fk_ClinicSignOnService (clinic_id)
        references Clinics (id),
    foreign key fk_ServiceSignOnService (service_id)
        references Services (id)
);

create table Analyzes
(
    id int not null auto_increment,
    serviceRegistration_id int not null,
    analyzes text not null,

    primary key (id),
    foreign key fk_Analyzes (serviceRegistration_id)
        references ServiceRegistration (id)
);

create table DoctorAppoint
(
    id int auto_increment not null,
    patient_id int not null,
    doctor_id int not null,
    clinic_id int not null,
    dateOfShowTime date not null,
    timeOfShowTime time not null,

    primary key (id),
    foreign key fk_PatientDoctorAppoint (patient_id)
        references Patient (id),
    foreign key fk_DoctorToDoctorAppoint (doctor_id)
        references Doctors (id),
    foreign key fk_ClinicDoctorAppoint (clinic_id)
        references Clinics (id)
);

create table Service_Appoint
(
    doctorAppoint_id int not null,
    service_id int not null,

    foreign key fk_Appoint_Service (doctorAppoint_id)
        references DoctorAppoint (id),
    foreign key fk_Service_Appoint (service_id)
        references Services (id)
);

create table resulAppoint
(
    id int not null auto_increment,
    doctorAppoint_id int not null,
    conclusion text not null,

    primary key (id),
    foreign key fk_DoctorAppoint (doctorAppoint_id)
        references DoctorAppoint (id)
);

