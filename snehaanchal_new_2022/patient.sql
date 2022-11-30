CREATE TABLE mytable(
   id                 INTEGER  NOT NULL PRIMARY KEY 
  ,name               VARCHAR(8) NOT NULL
  ,age                INTEGER  NOT NULL
  ,gender             VARCHAR(1) NOT NULL
  ,reg_type           VARCHAR(30)
  ,reg_date           VARCHAR(19) NOT NULL
  ,reg_id             VARCHAR(30)
  ,aadhar             INTEGER  NOT NULL
  ,pic_filename       VARCHAR(30)
  ,ref_by             VARCHAR(4)
  ,local_address      VARCHAR(6) NOT NULL
  ,local_city         VARCHAR(6) NOT NULL
  ,local_landmark     VARCHAR(15)
  ,local_phone1       INTEGER  NOT NULL
  ,local_phone2       INTEGER  NOT NULL
  ,permanent_address  VARCHAR(4) NOT NULL
  ,permanent_city     VARCHAR(30)
  ,permanent_landmark VARCHAR(30)
  ,permanent_phone1   VARCHAR(30)
  ,permanent_phone2   VARCHAR(30)
  ,fathers_name       VARCHAR(30)
  ,mothers_name       VARCHAR(30)
  ,spouse_name        VARCHAR(30)
  ,religion           BIT  NOT NULL
  ,language           BIT  NOT NULL
  ,occupation         VARCHAR(6)
  ,family_occupation  VARCHAR(30)
  ,family_earning     NUMERIC(7,1) NOT NULL
  ,remarks            VARCHAR(5)
  ,buddy_name         VARCHAR(30)
  ,buddy_relation     VARCHAR(30)
  ,buddy_address      VARCHAR(30)
  ,buddy_city         VARCHAR(30)
  ,buddy_phone        VARCHAR(30)
  ,buddy1_name        VARCHAR(30)
  ,buddy1_relation    VARCHAR(30)
  ,buddy1_address     VARCHAR(30)
  ,buddy1_city        VARCHAR(30)
  ,buddy1_phone       VARCHAR(30)
  ,admit_name         VARCHAR(30)
  ,admit_relation     VARCHAR(30)
  ,admit_address      VARCHAR(30)
  ,admit_phone        VARCHAR(30)
  ,admit_age          BIT  NOT NULL
  ,admit_gender       VARCHAR(30)
  ,is_active          BIT  NOT NULL
  ,dod                VARCHAR(19) NOT NULL
  ,created_at         VARCHAR(30)
  ,updated_at         VARCHAR(30)
  ,ip_addr            VARCHAR(30)
  ,patient_type_id    BIT  NOT NULL
);
INSERT INTO mytable(id,name,age,gender,reg_type,reg_date,reg_id,aadhar,pic_filename,ref_by,local_address,local_city,local_landmark,local_phone1,local_phone2,permanent_address,permanent_city,permanent_landmark,permanent_phone1,permanent_phone2,fathers_name,mothers_name,spouse_name,religion,language,occupation,family_occupation,family_earning,remarks,buddy_name,buddy_relation,buddy_address,buddy_city,buddy_phone,buddy1_name,buddy1_relation,buddy1_address,buddy1_city,buddy1_phone,admit_name,admit_relation,admit_address,admit_phone,admit_age,admit_gender,is_active,dod,created_at,updated_at,ip_addr,patient_type_id) VALUES (1,'jitendra',22,'m',NULL,'0000-00-00 00:00:00',NULL,123456789120,NULL,'ghgg','nagpur','GONDIA','GONDWANA SQUARE',1234567890,1234567890,'NGP',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'FARMER',NULL,12313.0,'FFHFF',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,0,'2022-07-30 11:04:47',NULL,NULL,NULL,0);
INSERT INTO mytable(id,name,age,gender,reg_type,reg_date,reg_id,aadhar,pic_filename,ref_by,local_address,local_city,local_landmark,local_phone1,local_phone2,permanent_address,permanent_city,permanent_landmark,permanent_phone1,permanent_phone2,fathers_name,mothers_name,spouse_name,religion,language,occupation,family_occupation,family_earning,remarks,buddy_name,buddy_relation,buddy_address,buddy_city,buddy_phone,buddy1_name,buddy1_relation,buddy1_address,buddy1_city,buddy1_phone,admit_name,admit_relation,admit_address,admit_phone,admit_age,admit_gender,is_active,dod,created_at,updated_at,ip_addr,patient_type_id) VALUES (15,'KUNAL',30,'M',NULL,'0000-00-00 00:00:00',NULL,41364446,NULL,NULL,'GONDIA','NAGPUR',NULL,1316434644,4634444644,'GJGJ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,0.0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,0,'2022-07-30 11:04:48',NULL,NULL,NULL,0);
