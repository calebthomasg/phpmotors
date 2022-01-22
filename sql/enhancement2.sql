--Query 1
INSERT INTO clients 
(clientFirstname, clientLastname, clientEmail, clientPassword, comment) 
VALUES ("Tony", "Stark", "tony@starkent.com", "Iam1ronM@n", "I am the real Ironman");

--Checks to see if our data was inserted
SELECT clientLastname, clientEmail, clientPassword FROM clients WHERE clientFirstname = "Tony";

--Query 2
UPDATE clients SET clientLevel = 3 WHERE clientFirstname="Tony";

--Checks to see if our modification took place
SELECT clientLevel FROM clients WHERE clientFirstname = "Tony";

--Query 3
UPDATE inventory SET invDescription =REPLACE("small interior", "small", "spacious") 
WHERE invModel="Hummer";

--Checks to see if our modification took place
SELECT invDescription FROM inventory WHERE invModel = "Hummer";

--Query 4
SELECT inventory.invModel, carclassification.classificationName, inventory.classificationId
FROM inventory
INNER JOIN carclassification ON inventory.classificationId=carclassification.classificationId
WHERE classificationName = "SUV";

--Query 5
DELETE FROM inventory WHERE invMake = "Jeep" AND invModel = "Wrangler";

--Checks to see if our deletion was done
SELECT invMake FROM inventory WHERE invMake= "Jeep";

--Query 6
UPDATE inventory SET invImage = CONCAT("/phpmotors", invImage);
UPDATE inventory SET invThumbnail = CONCAT("/phpmotors", invThumbnail);

--Checks to see if our update occurred
SELECT invImage, invThumbnail FROM inventory;