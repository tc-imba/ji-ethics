@extends('admin.Header')
@section('content')
<div class="padding">

    <?php
        echo"<div><h1>Add a New Survey question for Survey $id</h1></div>"
    ?>

    <div class="row">
        <div class="col-xs-1 col-sm-2 col-md-2"></div>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <form action="/surveyquestion_add" method="POST" target="nm_iframe">

                {{ csrf_field() }}
                <?php
                echo "<br/>";
                echo "<br/>";

                echo "<label>Question details</label>";
                echo "<div class=\"form-group\">";
                echo "<textarea name=\"question_detail\"   class=\"form-control\"  placeholder=\"Input question title in the box\">";

                echo "</textarea>";
                echo "</div>";

                echo "<div class=\"form-group\" style=\"display:none;\">";
                echo"<textarea name=\"survey_id\"   style=\"height:80px;max-height:500px;\" class=\"form-control\">";
                echo $id;
                echo"</textarea>";
                echo "</div>";









                    echo"<button type=\"submit\" class=\"btn btn-default\" >submit</button>";
                    echo "<br/>";
                    echo "<br/>";
                    ?>
            </form>
            <?php
            echo "<iframe id=\"id_iframe\" name=\"nm_iframe\" style=\"display:none;\"></iframe>";


                echo"<br/>";
                echo"<br/>";
                echo"<br/>";

                echo"<div class = \"text-center\">";
                $link_back = url("/check/survey/$id");
                echo"<a class=\"btn btn-default\" href= $link_back>Back to Check Page</a>";
                echo"</div>";

                echo"<br/>";
                echo"<br/>";
                echo"<br/>";

                ?>






        </div>


        <div class="col-md-2"></div>




    </div>


    <div class="col-xs-1 col-sm-2 col-md-2"></div>
</div>
@endsection