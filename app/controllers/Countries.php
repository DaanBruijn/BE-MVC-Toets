<?php

class Countries extends Controller
{
    private $countryModel;

    public function __construct()
    {
        $this->countryModel = $this->model('Country');
    }

    public function index($country = null, $age = null)
    {
        //laat de model de gegevens uit de database halen vie de getcountries method.
        $records = $this->countryModel->getCountries();

        // var_dump($records);

        $rows = '';
        foreach ($records as $value) {
            $rows .= "<tr>
                                <td>$value->Name</td>
                                <td>$value->CapitcalCity</td>
                                <td>$value->Continent</td>
                                <td>$value->Population</td>
                                <td><a href='" . URLROOT . "/countries/update/$value->id'>Update</a></td>
                                <td><a href='" . URLROOT . "/countries/delete/$value->id'>Delete</a></td>
                        </tr>";
        }

        //stuurt de gegevens uit de model naar de view
        $data = [
            'title' => "Landen van de wereld",
            'rows' => $rows
        ];
        $this->view('countries/index', $data);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->countryModel->createCountry($_POST);
            header("Location: " . URLROOT . "countries/index");
        } else {
            $data = [
                'title' => "<h2>Maak een nieuw record aan</h2>"
            ];
            $this->view("countries/create", $data);
        }
    }

    public function update($id = null)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->countryModel->updateCountry($_POST);
            header("Location: " . URLROOT . "countries/index");
        } else {
            $row = $this->countryModel->getSingleCountry($id);
            $data = [
                'title' => '<h1>Update Land</h1>',
                'row' => $row
            ];
            $this->view("/countries/update", $data);
        }
    }

    public function delete($id)
    {
        $this->countryModel->deleteCountry($id);
        $data = [
            'deleteStatus' => "<h2>Het record met id = $id is verwijderd.</h2>"
        ];
        $this->view("countries/delete", $data);
        header("Refresh:2; url=" . URLROOT . "/countries/index");
    }
}
