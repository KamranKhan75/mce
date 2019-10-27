// $(document).ready(function(){
//     $("#jid").change(function(){
//         var job_id= $("#jid").val();
//         $.ajax({
//             url:'addempdetails.php',
//             method:'post',
//             data='job_id='+job_id
//         }).done(function(sid){
//             console.log(sid);
//         })
//     });
// });
$('#jid').on('change', function(){
    var job_id = this.value;
    $.ajax({
    type: "POST",
    url: "get_job.php",
    data:'job_id='+job_id,
    success: function(result){
    $("#sid").html(result);
    }
    });
    });