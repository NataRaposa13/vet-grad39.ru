create trigger natural_experience_insert before insert on doctors
    for each row
begin
    if new.experience < 0 then
        set new.experience = 0 - new.experience;
    end if;
end;

create trigger natural_experience_update before update on doctors
    for each row
begin
    if new.experience < 0 then
        set new.experience = 0 - new.experience;
    end if;
end;

create trigger true_date_insert before insert on services
    for each row
begin
    if new.startDate > new.endDate then
        signal sqlstate '45001' set message_text = 'Дата начала должна быть меньше даты окончания';
    end if;
end;

create trigger true_date_update before update on services
    for each row
begin
    if new.startDate < new.endDate then
        signal sqlstate '45001' set message_text = 'Дата начала должна быть меньше даты окончания';
    end if;
end;

create trigger telephone_format_insert before insert on user
    for each row
begin
    if (new.telephone not regexp '[0-9]') or (length(new.telephone) <> 10) then
        SIGNAL sqlstate '45001' set message_text = 'Неправильный номер телефона';
    end if;
end;

create trigger telephone_format_update before update on user
    for each row
begin
    if (new.telephone not regexp '[0-9]') or (length(new.telephone) <> 10) then
        SIGNAL sqlstate '45001' set message_text = 'Неправильный номер телефона';
    end if;
end;

create trigger mail_format_insert before insert on user
    for each row
begin
    if (new.email not regexp '^[a-zA-Z0-9][+a-zA-Z0-9._-]*@[a-zA-Z0-9][a-zA-Z0-9._-]*[a-zA-Z0-9]*\\.[a-zA-Z]{2,6}$') then
        SIGNAL sqlstate '45001' set message_text = 'Неправильный формат электронной почты';
    end if;
end;

create trigger mail_format_update before update on user
    for each row
begin
    if (new.email not regexp '^[a-zA-Z0-9][+a-zA-Z0-9._-]*@[a-zA-Z0-9][a-zA-Z0-9._-]*[a-zA-Z0-9]*\\.[a-zA-Z]{2,6}$') then
        SIGNAL sqlstate '45001' set message_text = 'Неправильный формат электронной почты';
    end if;
end;

create trigger high_initials_doctors_insert before insert on doctors
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger high_initials_doctors_update before update on doctors
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger high_initials_employees_insert before insert on employees
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger high_initials_employees_update before update on employees
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger high_initials_insert before insert on user
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger high_initials_update before update on user
    for each row
begin
    if (cast(new.surname as binary(1)) <> cast(upper(new.surname) as binary(1))) or (cast(new.name as binary(1)) <> cast(upper(new.name) as binary(1))) or (cast(new.patronymic as binary(1)) <> cast(upper(new.patronymic) as binary(1))) then
        SIGNAL sqlstate '45001' set message_text = 'Фамилия, Имя и Отчество с большой буквы';
    end if;
end;

create trigger cost_of_service_insert before insert on doctor_service
    for each row
begin
    if new.costOfService IS NULL then
        set new.costOfService = (select allowanceAmount from doctors where id = new.doctor_id) + (select cost from services where id = new.service_id);
    end if;
end;

create trigger cost_of_service_update before update on doctor_service
    for each row
begin
    set new.costOfService = (select allowanceAmount from doctors where id = new.doctor_id) + (select cost from services where id = new.service_id);
end;

create trigger natural_cost_insert before insert on services
    for each row
begin
    if new.cost < 0 then
        SIGNAL sqlstate '45001' set message_text = 'Некорректная стоимость услуги';
    end if;
end;

create trigger natural_cost_update before update on services
    for each row
begin
    if new.cost < 0 then
        SIGNAL sqlstate '45001' set message_text = 'Некорректная стоимость услуги';
    end if;
end;