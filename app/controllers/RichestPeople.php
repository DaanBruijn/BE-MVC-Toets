<?php

class Countries extends Controller
{
    private $richestPeopleModel;

    public function __construct()
    {
        $this->richestPeopleModel = $this->model('RichestPeople');
    }

    public function index($richestpeople = null, $age = null)
    {
        //laat de model de gegevens uit de database halen vie de getRichestPeople method.
        $records = $this->richestPeopleModel->getRichestPeople();

        // var_dump($records);

        $rows = '';
        foreach ($records as $value) {
            $rows .= "<tr>
                                <td>$value->Name</td>
                                <td>$value->Networth</td>
                                <td>$value->Age</td>
                                <td>$value->Company</td>
                                <td><a href='" . URLROOT . "/countries/delete/$value->id'>Delete</a></td>
                        </tr>";
        }

        //stuurt de gegevens uit de model naar de view
        $data = [
            'title' => "De Vijf Rijkste mensen ter wereld",
            'rows' => $rows
        ];
        $this->view('richestpeople/index', $data);
    }

    public function delete($id)
    {
        $this->richestPeopleModel->deleteRichestPeople($id);
        $data = [
            'deleteStatus' => "<h2>Het record met id = $id is succesvol verwijderd.</h2>"
        ];
        $this->view("richestpeople/delete", $data);
        header("Refresh:2; url=" . URLROOT . "/richestpeople/index");
    }
}
