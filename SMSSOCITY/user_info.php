<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/upper.css" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css' type='text/css' media='all'>

    <style>
        body {
            padding: 20px 20px;
        }

        .results tr[visible="false"],
        .no-result {
            display: none;
        }

        .results tr[visible="true"] {
            display: table-row;
        }

        .counter {
            padding: 8px;
            color: #ccc;
        }
    </style>


</head>

<body>


    <main>

        <!--page-title-area start-->

        <!--page-title-area end-->
        <!--events-area start-->
        <section class="events-area pt-130 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-12 table-responsive">


                        <div class="form-group pull-left">

                            <input type="text" class="search form-control" placeholder="Search">
                        </div>
                        <span class="counter pull-right"></span>
                        <table class="table table-striped  table-hover table-bordered results">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="col-md-5 col-xs-5">Name / Surname</th>
                                    <th class="col-md-4 col-xs-4">Job</th>
                                    <th class="col-md-3 col-xs-3">Date</th>
                                    <th class="col-md-3 col-xs-3">Position</th>
                                </tr>
                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Vatanay Özbeyli</td>
                                    <td>UI & UX</td>
                                    <td>11-03-2022</td>
                                    <td>Roster</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Burak Özkan</td>
                                    <td>Software Developer</td>
                                    <td>12-05-2022</td>
                                    <td>Tecno</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Egemen Özbeyli</td>
                                    <td>Purchasing</td>
                                    <td>17-05-2022</td>
                                    <td>rato</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Engin Kızıl</td>
                                    <td>Sales</td>
                                    <td>17-05-2021</td>
                                    <td>tero</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </section>
        <!--events-area end-->

        <!--cta-area end-->
    </main>














    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".search").keyup(function() {
                var searchTerm = $(".search").val();
                var listItem = $(".results tbody").children("tr");
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

                $.extend($.expr[":"], {
                    containsi: function(elem, i, match, array) {
                        return (
                            (elem.textContent || elem.innerText || "")
                            .toLowerCase()
                            .indexOf((match[3] || "").toLowerCase()) >= 0
                        );
                    }
                });


                $(".results tbody tr")
                    .not(":containsi('" + searchSplit + "')")
                    .each(function(e) {
                        $(this).attr("visible", "false");
                    });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr("visible", "true");
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $(".counter").text(jobCount + " item");

                if (jobCount == "0") {
                    $(".no-result").show();
                } else {
                    $(".no-result").hide();
                }
            });
        });
    </script>


</body>

</html>