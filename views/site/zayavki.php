<?php
/**
 * Created by PhpStorm.
 * User: ClassUser
 * Date: 12.11.2019
 * Time: 18:17
 */
?><table class="table table-hover">
    <thead>
    <tr>
        <th>номер</th>
        <th>имя</th>
        <th>тема</th>
        <th>email</th>
        <th>текст</th>

    </tr>
    </thead>
    <tbody>
<?php
foreach ($array as $key) {

    echo '<tr class="success"><td>'.$key->id.'</td>
                <td>'.$key->name.'</td>
                <td>'.$key->subject.'</td>
                <td>'.$key->email.'</td>
                <td>'.$key->content.'</td>';



}
?>