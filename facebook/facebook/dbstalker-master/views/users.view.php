<?php
class users_view extends Stalker_View
{
    public function view_query() {
        return "SELECT `users`.`id`,
                    `users`.`first_name` AS `First_name`,
                    `users`.`surname` AS `Last_name`,
                    `users`.email AS `Email`
                    `users`.Date_of_birth AS Date_of_birth
                FROM `users`
                ORDER BY `users`.`id`";
    }
}
?>