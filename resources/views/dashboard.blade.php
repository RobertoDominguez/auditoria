<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>


</body>

</html>

<div class="container">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
        <div class="dataTables_scroll">
            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                <div class="dataTables_scrollHeadInner"
                    style="box-sizing: content-box; width: 660px; padding-right: 0px;">
                    <table class="table isSearch dataTable no-footer" cellspacing="0" role="grid"
                        style="margin-left: 0px; width: 660px;">
                        <thead>
                            <tr class="table-heads " role="row">
                                <th class="head-item mbr-fonts-style display-7 sorting_asc" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 172px;"
                                    aria-label="
                NAME: activate to sort column descending" aria-sort="ascending">
                                    NOMBRE</th>
                                <th class="head-item mbr-fonts-style display-7 sorting" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 74px;"
                                    aria-label="
                AGE: activate to sort column ascending">
                                    ASISTENCIAS EN EL MES</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                <table class="table isSearch dataTable no-footer" cellspacing="0" id="DataTables_Table_0" role="grid"
                    aria-describedby="DataTables_Table_0_info" style="width: 660px;">
                    <thead>
                        <tr class="table-heads " role="row" style="height: 0px;">
                            <th class="head-item mbr-fonts-style display-7 sorting_asc"
                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 172px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                aria-label="
                NAME: activate to sort column descending" aria-sort="ascending">
                                <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                    NOMBRE</div>
                            </th>
                            <th class="head-item mbr-fonts-style display-7 sorting" aria-controls="DataTables_Table_0"
                                rowspan="1" colspan="1"
                                style="width: 74px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                aria-label="
                AGE: activate to sort column ascending">
                                <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                    ASISTENCIAS EN EL MES</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @php
                            $i = 0;
                        @endphp
                        @foreach ($users as $user)
                            <tr role="row" class="odd">
                                <td class="body-item mbr-fonts-style display-7 sorting_1">{{ $user->name }}</td>
                                <td class="body-item mbr-fonts-style display-7">{{ $assistances[$i] }}</td>
                            </tr>
                            @php
                                $i = $i + 1;
                            @endphp
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
