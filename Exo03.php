<?php





?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Magazine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <div class="well">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="titleInput" class="col-sm-2 control-label">Nom du magazine</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="titleInput"
                               placeholder="Nom du Magazine">
                    </div>
                </div>
                <div class="form-group">
                    <label for="durationInput" class="col-sm-2 control-label">Durée</label>
                    <div class="col-sm-10">
                        <select name="duration" class="form-control" id="titleInput">
                            <option value="all">Tous</option>
                            <option value="hebdomadaire">Hebdomadaire</option>
                            <option value="mensuel">Mensuel</option>
                            <option value="bimestriel">Bimestriel</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Année</label>
                    <div class="col-sm-4">
                        <input name="year_start" type="text" class="form-control" id="titleInput" placeholder="Début">
                    </div>

                </div>
                <div class="form-group">
                    <label for="genderInput" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-4">
                        <input name="type" type="text" class="form-control" id="genderInput"
                               placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Chercher</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
            </form>
        </div>
    </div>
</div>

<div class="results">
    <table class="table table-hover">
        <tr id="displayMagazine">
            <th>
                Nom
            </th>
            <th>
                Genre
            </th>
            <th>
                Année
            </th>
            <th>
                Sortie
            </th>
        </tr>
    </table>
</div>

</body>
</html>