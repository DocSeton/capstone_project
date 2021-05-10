<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></head>
<script type="text/javascript">
  var index=0;
</script>
<body>
    <div class="container"style="max-width: 700px;">

        <div class="text-center" style="margin: 20px 0px 20px 0px;">


        </div>

        <form method="post" action="">
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                            <input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">
                            <div class="input-group-append">
                                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                            </div>
                        </div>
                    </div>

                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                </div>
            </div>
             <br/>
            <div class="questionnaire">
                <div class="row">
                    <button id="addCardRow" type="button" class="btn btn-info">Add Card Row</button>
                </div>

                <div id="newCardRow"></div>
            </div>
        </form>
    </div>

<script type="text/javascript">



    // add row

    $('#addRow').click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });


      $('#addCardRow').click(function () {

        var html = '';
        html += ' <div id="cardRow" name="cardRow" >';
        html += '       <div class="card">';
        html += '                <div class="card-header">';
        html += '                    <div class="input-group mb-3">';
        html += '                        <input type="text" name="titleCard[]" data-indexval=' + index + ' class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '                       <button id="removeCardRow" type="button" data-indexval=' + index + ' onclick="removeCard(this)" class="btn btn-danger">Remove Card</button>';
        html += '                   </div>';
        html += '                </div>';
        html += '                <div class="card-body">';
        html += '                    <div class="row">';
        html += '                        <div class="col-lg-12">';
        html += '                            <div id="inputFormCardRow">';
        html += '                                <div class="input-group mb-3">';
        html += '                                    <input type="text" name="card' + index + 'titleQuestionCard[]" data-cardindexval=' + index + ' class="form-control m-input" placeholder="Enter question" autocomplete="off">';
        html += '                                    <div class="input-group-append"> ';
        html += '                                        <button id="removeCardQuestionRow" type="button" onclick="removeQuestion(this)" class="btn btn-danger">Remove</button>';
        html += '                                    </div>';
        html += '                                </div>';
        html += '                            </div>';
        html += '                            <div id="newQuestionRow' +  index + '"></div>';
        html += '                           <button id="addCardQuestionRow" type="button" data-cardindexval=' + index + '  onclick="addQuestion(this)" class="btn btn-info">Add Card Question Row</button>';
        html += '                        </div>';
        html += '                    </div>';
        html += '                </div>';
        html += '            </div>';
        html += '       </div>';

        $('#newCardRow').append(html);
         index++;

    });

    // remove row

    function removeCard(element){
        $(element  ).closest('#cardRow').remove();
    }

    function removeQuestion(element){
         $(element  ).closest('#inputFormCardRow').remove();
    }

    function addQuestion(element){
         var i = $(element).data("cardindexval");
          var html = '';
        html += '                            <div id="inputFormCardRow">';
        html += '                                <div class="input-group mb-3">';
        html += '                                    <input type="text" name="card' + index + 'titleQuestionCard[]" data-cardindexval=' + index + ' class="form-control m-input" placeholder="Enter question" autocomplete="off">';
        html += '                                    <div class="input-group-append"> ';
        html += '                                        <button id="removeCardQuestionRow" type="button" onclick="removeQuestion(this)" class="btn btn-danger">Remove</button>';
        html += '                                    </div>';
        html += '                                </div>';
        html += '                            </div>';


        $('#newQuestionRow' + i).append(html);


    }

</script>
</body>
</html>
