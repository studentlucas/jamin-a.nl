/******************************************************
-- Doel: Opvragen van records uit de tabellen Product
         ProductPerLeverancier en Leverancier op basis
         van het ProductId
*******************************************************
-- Versie: 01
-- Datum: 15-11-2024
-- Auteur: Arjan de Ruijter
******************************************************/

-- Selecteer de juiste database voor je stored procedure
use `jamin_a`;

-- Verwijder de oude stored procedure
DROP PROCEDURE IF EXISTS spSelectProductLeveringById;

-- Verander even tijdelijk de opdrachtprompt naar //
DELIMITER //

CREATE PROCEDURE spSelectProductLeveringById(
    IN ProductId INT UNSIGNED
)
BEGIN

    SELECT  PPL.DatumLevering
           ,PPL.DatumEerstVolgendeLevering
           ,PPL.Aantal
           ,PROD.Naam                       AS ProductNaam
           ,PROD.Id
           ,LEVE.Naam                       AS LeverancierNaam
           ,LEVE.Contactpersoon
           ,LEVE.Leveranciernummer
           ,LEVE.Mobiel

    FROM  ProductPerLeverancier AS PPL

    INNER JOIN Product AS PROD
            ON PPL.ProductId = PROD.Id

    INNER JOIN Leverancier AS LEVE 
            ON PPL.LeverancierId = LEVE.Id

    WHERE PPL.ProductId = ProductId

    ORDER BY PPL.DatumLevering ASC;


END //
DELIMITER ;

/************* debug code stored procedure **************

CALL spSelectProductLeveringById(1);

********************************************************/



