<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/countries/create" method="post">
    <table>
        <thead>
            <th><label for="">Name: </label></th>
            <th><label for="">CapitcalCity: </label></th>
            <th><label for="">Continent: </label></th>
            <th><label for="">Population: </label></th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="Name" id="Name">
                </td>
                <td>
                    <input type="text" name="CapitcalCity" id="CapitcalCity">
                </td>
                <td>
                    <select name="Continent">
                        <option value="Europa">Europa</option>
                        <option value="Zuid-Amerika" ?>>Zuid-Amerika</option>
                        <option value="Noord-amerika">Noord-amerika</option>
                        <option value="Azië">Azië</option>
                        <option value="Oceanië">Oceanië</option>
                        <option value="Antartica">Antartica</option>
                        <option value="Afrika">Afrika</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="Population" id="Population">
                </td>
                <td>
                    <input type="hidden" name="id">
                </td>
                <td>
                    <input type="submit" value="Maak Aan">
                </td>
            </tr>
        </tbody>
    </table>
</form>