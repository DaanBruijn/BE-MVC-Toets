<?php
class RichestPeople
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getRichestPeople()
    {
        $this->db->query('SELECT * FROM RichestPeople');
        $result = $this->db->resultSet();
        return $result;
    }

    public function deleteRichestPeople($id)
    {
        $this->db->query("DELETE from `RichestPeople` where `id` = :id");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
