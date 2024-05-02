<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($hotels as $data) {
            echo "<tr>
                    <th>{$data['name']}</th>
                    <td>{$data['description']}</td>
                    <td>{$data['parking']}</td>
                    <td>{$data['vote']}</td>
                    <td>{$data['distance_to_center']}</td>
                </tr>";
        }
        ;
        ?>
    </tbody>
</table>