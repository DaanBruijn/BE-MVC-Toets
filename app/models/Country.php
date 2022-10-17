<?php
class Country
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        $this->db->query('SELECT * FROM country');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleCountry($id = null)
    {
        $this->db->query("SELECT * from `country` where `id` = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function createCountry($post)
    {
        $this->db->query("INSERT INTO country
                    (Id, Name, CapitcalCity, Continent, Population)
                                    
            values  (:id, :Name, :CapitcalCity, :Continent, :Population)");

        $this->db->bind(':id', NULL, PDO::PARAM_INT);
        $this->db->bind(':Name', $post['Name'], PDO::PARAM_STR);
        $this->db->bind(':CapitcalCity', $post['CapitcalCity'], PDO::PARAM_STR);
        $this->db->bind(':Continent', $post['Continent'], PDO::PARAM_STR);
        $this->db->bind(':Population', $post['Population'], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function updateCountry($post)
    {
        var_dump($post);
        $this->db->query("UPDATE `country`
                            SET `Name` = :Name,
                            CapitcalCity = :CapitcalCity,
                            Continent = :Continent,
                            Population = :Population
                            WHERE `id` = :id");

        $this->db->bind(':id', $post['Id'], PDO::PARAM_INT);
        $this->db->bind(':Name', $post['Name'], PDO::PARAM_STR);
        $this->db->bind(':CapitcalCity', $post['CapitcalCity'], PDO::PARAM_STR);
        $this->db->bind(':Continent', $post['Continent'], PDO::PARAM_STR);
        $this->db->bind(':Population', $post['Population'], PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function deleteCountry($id)
    {
        $this->db->query("DELETE from `country` where `id` = :id");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
