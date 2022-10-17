<?php

?>

<form action="<?= URLROOT; ?>/countries/update" method="post">
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
                    <input type="text" name="Name" id="Name" value="<?= $data["row"]->Name ?>">
                </td>
                <td>
                    <input type="text" name="CapitcalCity" id="CapitcalCity" value="<?= $data["row"]->CapitcalCity ?>">
                </td>
                <td>
                    <select name="Continent">
                        <option value="Europa" <?php if ($data['row']->Continent == 'Europa') {
                                                    echo 'Selected';
                                                } ?>>Europa</option>
                        <option value="Zuid-Amerika" <?php if ($data['row']->Continent == 'Zuid-Amerika') {
                                                            echo 'Selected';
                                                        } ?>>Zuid-Amerika</option>
                        <option value="Noord-amerika" <?php if ($data['row']->Continent == 'Noord-amerika') {
                                                            echo 'Selected';
                                                        } ?>>Noord-Amerika</option>
                        <option value="Azië" <?php if ($data['row']->Continent == 'Azië') {
                                                    echo 'Selected';
                                                } ?>>Azië</option>
                        <option value="Oceanië" <?php if ($data['row']->Continent == 'Oceanië') {
                                                    echo 'Selected';
                                                } ?>>Oceanië</option>
                        <option value="Antartica" <?php if ($data['row']->Continent == 'Antartica') {
                                                        echo 'Selected';
                                                    } ?>>Antartica</option>
                        <option value="Afrika" <?php if ($data['row']->Continent == 'Afrika ') {
                                                    echo 'Selected';
                                                } ?>>Afrika</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="Population" id="Population" value="<?= $data["row"]->Population ?>">
                </td>
                <td>
                    <input type="hidden" name="Id" value="<?= $data["row"]->id ?>">
                </td>
                <td>
                    <input type="submit" value="Update Gegevens">
                </td>
            </tr>
        </tbody>
    </table>
</form>