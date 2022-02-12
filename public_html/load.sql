USE jpappas2_1;

INSERT INTO designers
    (desID,desName,desPhone,desEmail,desCity,desCountry,desZip,desStreet)
VALUES
    (1,'Pfizer-BioNTech',8332952122,'pfizer0@pfizer.com','New York','United States',10017,'235 E 42nd St'),
    (2,'Moderna',5987884383,'pfizer@pfizer.com','Cambridge','United States',02139,'200 Technology Square'),
    (3,'Johnson & Johnson Janssen',3096846305,'pfizer@pfizer.com','New Brunswick','United States',08933,'1 Johnson & Johnson Plaza');

INSERT INTO manufacturers
    (manID,manName,manPhone,manEmail,manCity,manCountry,manZip,manStreet,desID_created)
VALUES
   (1, 'Maggio Group', '2877714801', 'emenghi0@goodreads.com', 'Yuejin', 'China', 12617,'0368 Manufacturers Alley',1),
   (2, 'Hirthe Group', '8332952122', 'mbaskerville1@bloomberg.com', 'Eci', 'Indonesia', 13411,'7 Oak Valley Hill',2),
   (3, 'Jast and Sons', '3977786395', 'jdenrico2@indiegogo.com', 'La Esperanza', 'Mexico', 15316,'2 Kings Street',1),
   (4, 'Harris-Herzog', '6811810403', 'wmuff3@apache.org', 'Wangong', 'China', 17757,'55712 1st Center',3),
   (5, 'Gleason-Daniel', '5987884383', 'ablaw4@wsj.com', 'Jasugih Selatan', 'Indonesia', 17475,'2 Kings Street',2),
   (6, 'Quitzon Inc', '3096846305', 'cdawney5@ibm.com', 'Rolante', 'Brazil', 19491,'2 Kings Street',1),
   (7, 'Jenkins-Anderson', '4182297848', 'lramble6@canalblog.com', 'Baiyin', 'China', 11518,'0368 Manufacturers Alley',3),
   (8, 'Stark and Sons', '9374308823', 'isedgmond7@mozilla.org', 'Pathum Thani', 'Thailand', 18368,'03 Thierer Plaza',2),
   (9, 'Barrows Inc', '8192282149', 'petchingham8@techcrunch.com', 'Bcharré', 'Lebanon', 19153,'9 Hanson Trail',1),
   (10, 'O''Connell, Block and Flatley', '5875224608', 'cpollendine9@mozilla.org', 'Shagedu', 'China', 16830,'7 Oak Valley Hill',3);

INSERT INTO dosages
    (dosID,dosDate,desID_received,manID_received)
VALUES
    (1, '2021-03-16',2,3),
	(2, '2020-05-17',1,9),
	(3, '2020-06-30',2,1),
	(4, '2020-12-14',1,10),
	(5, '2021-05-28',3,1),
	(6, '2021-02-16',3,8),
	(7, '2020-11-16',1,5),
	(8, '2020-05-18',3,1),
	(9, '2020-10-22',2,4),
	(10, '2021-01-20',1,2);

INSERT INTO distribution_centers
    (dcID,dcName,dcPhone,dcEmail,dcCity,dcCountry,dcZip,dcStreet)
VALUES
    (1, 'Bernier-Doyle', '4557982771', 'kduff0@geocities.jp', 'Bila Krynytsya', 'Ukraine', 10233, '7 Bayside Court'),
	(2, 'Williamson, Konopelski', '4061020638', 'csennett1@phoca.cz', 'Neundeut', 'Indonesia', 12682, '556 Schmedeman Way'),
	(3, 'Cruickshank-Konopelski', '3397173253', 'kswinfen2@tuttocitta.it', 'Ban Khlong Bang Sao Thong', 'Thailand', 13833, '9032 Sauthoff Drive'),
	(4, 'Schmeler-Rath', '5528117873', 'arydings3@yale.edu', 'Malec', 'Poland', 19430, '4 Emmet Circle'),
	(5, 'Gerlach Group', '7745776091', 'rdimitrov4@dailymail.co.uk', 'Jayapura', 'Indonesia', 17262, '7 Bayside Court'),
	(6, 'Haley, O''Hara and Windler', '2622506616', 'aleeder5@dailymail.co.uk', 'Racine', 'United States', 10323, '4 Emmet Circle'),
	(7, 'Okuneva, Pfeffer and Miller', '8298862856', 'sbuist6@jiathis.com', 'Kapsan', 'North Korea', 11338, '556 Schmedeman Way'),
	(8, 'Orn Group', '2138480500', 'kivanets7@ebay.com', 'Los Angeles', 'United States', 18590, '9032 Sauthoff Drive'),
	(9, 'Schumm-Daniel', '1116375454', 'chansemann8@tmall.com', 'Rujayb', 'Palestinian Territory', 15763, '97155 Doe Crossing Center'),
	(10, 'Borer, Kertzmann and Braun', '5325137398', 'padmans9@amazon.de', 'Masran', 'Indonesia', 11244, '7 Bayside Court');

INSERT INTO recipients
    (recID,recFName,recLName,recPhone,recEmail,recCity,recCountry,recZip,recStreet,recDate,dosID_received,dcID_visited)
VALUES
    (1, 'Aloin', 'Gosford', '3006696273', 'agosford0@tiny.cc', 'Dashiju', 'China', 17272,'38 Columbus Hill', '2020-12-04',7,4),
	(2, 'Adrienne', 'Dee', '7294275140', 'adee1@marketwatch.com', 'Cruz Alta', 'Brazil', 12709,'4 Saint Paul Drive', '2020-12-04',9,8),
	(3, 'Orsola', 'Procter', '2049744669', 'oprocter2@tuttocitta.it', 'Paris 13', 'France', 16077,'0 Milwaukee Center', '2020-12-04',2,1),
	(4, 'Florida', 'Littlechild', '6908651440', 'flittlechild3@springer.com', 'Burgersfort', 'South Africa', 10350,'71470 Summerview Pass', '2020-12-04',10,2),
	(5, 'Mady', 'Garlinge', '3851310118', 'mgarlinge4@tinyurl.com', 'Lupak', 'Indonesia', 10158,'12 Village Hill', '2020-12-04',1,4),
	(6, 'Trueman', 'Trematick', '4297204001', 'ttrematick5@google.es', 'Era', 'Indonesia', 12996,'0 Milwaukee Center', '2020-12-04',3,9),
	(7, 'Lynette', 'Jillard', '9824676266', 'ljillard6@people.com.cn', 'Jieting', 'China', 15904,'38 Columbus Hill', '2020-12-04',1,6),
	(8, 'Eudora', 'Treby', '3699553692', 'etreby7@baidu.com', 'Besah', 'Indonesia', 15645,'71470 Summerview Pass', '2020-12-04',5,7),
	(9, 'Leone', 'Bagguley', '5552056567', 'lbagguley8@parso-orange.fr', 'Changpo', 'China', 14304,'12 Village Hill', '2020-12-04',6,3),
	(10, 'Darrel', 'Lambden', '9964017022', 'dlambden9@cbc.ca', 'Alebtong', 'Uganda', 19047,'4 Saint Paul Drive', '2020-12-04',10,1);
