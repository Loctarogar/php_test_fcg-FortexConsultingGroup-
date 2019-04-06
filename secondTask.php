<?php

include_once 'Database/PDOconnection.php';

function findContact($array, $contact){
    /**  */
}

function getAllBuildings()
{
    $dbconnection = new Database();
    $conn = $dbconnection->getConnection();
    $query = "
        SELECT 
          b.Address AS Building_Address,
          p.Name,
          c.Contact,
          (SELECT COUNT(Contact) 
           FROM contacts
           WHERE Contact = c.Contact) AS total
        FROM 
          buildings b
        JOIN 
          persons p ON p.BuildId = b.BuildId
        JOIN 
          contacts c ON c.PersonId = p.PersonId
        GROUP BY 
        b.Address, p.Name, c.Contact

            ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    $groupsArray = [];
    foreach ($data as $element){
        if($element['total'] > 1){
            $groupsArray[$element['Contact']][] = $element;
        }
    }

    print_r($groupsArray);

}
    getAllBuildings();
