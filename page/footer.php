
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="<?=$action->helper->loadjs('main.js')?>"></script>
<script>

const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
<?php
$error=$action->session->get('error');
$success=$action->session->get('success');
if($error){
    ?>


Toast.fire({
  icon: 'error',
  title: '<?=$error?>'
});

    <?php
    $action->session->delete('error');
}
if($success){
    ?>
Toast.fire({
  icon: 'success',
  title: '<?=$success?>'
});

    <?php
    $action->session->delete('success');
}
?>

$("#addskill").click(function(){
  var skill=$('#userskill').val();
  if(!skill){
    Toast.fire({
  icon: 'error',
  title: 'enter a skill',
});
return;
  }
$("#skills").append(`<span class="badge text-bg-danger p-2 m-1">${skill}<input type ="hidden" name="skill[]" value="${skill}"/><span class="text-black removeskill" onclick="removeskill(this)"> X</span></span>`)
$('#userskill').val('');
});

$("#addeducation").click(function(){
  var college=$('#college').val();
  var course=$('#course').val();
  var gpa=$('#gpa').val();
  var e_duration=$('#e_duration').val();

  if(!college){
    Toast.fire({
  icon: 'error',
  title: 'enter a institute',
});
return;
  }
  if(!course){
    Toast.fire({
  icon: 'error',
  title: 'enter the course',
});
return;
  }
  if(!e_duration){
    Toast.fire({
  icon: 'error',
  title: 'enter course duration',
});
return;
  }
  if(!gpa){
    Toast.fire({
  icon: 'error',
  title: 'enter the cgpa',
});
return;
  }

$("#educations").append(`<div class="d-inline-block border rounded p-2 my-2">
<input type ="hidden" name="college[]" value="${college}">
<input type ="hidden" name="course[]" value="${course}">
<input type ="hidden" name="gpa[]" value="${gpa}">
<input type ="hidden" name="e_duration[]" value="${e_duration}">
        <h3>${college}</h3>
        <p> ${course} with CGPA- ${gpa} in ${e_duration} </p>
        <button type="button" class="btn btn-sm btn-danger" onclick="removeeducation(this)">Remove</button>
      </div>`)
$('#college').val('');
$('#course').val('');
$('#gpa').val('');
$('#e_duration').val('');
});



$("#addexp").click(function(){
  var company=$('#company').val();
  var jobrole=$('#jobrole').val();
  var w_duration=$('#w_duration').val();
  var about=$('#work_desc').val();

  if(!company){
    Toast.fire({
  icon: 'error',
  title: 'enter a company',
});
return;
  }
  if(!jobrole){
    Toast.fire({
  icon: 'error',
  title: 'enter the jobrole',
});
return;
  }
  if(!w_duration){
    Toast.fire({
  icon: 'error',
  title: 'enter course duration',
});
return;
  }

$("#exps").append(`<div class="d-inline-block border rounded p-2 my-2">
<input type ="hidden" name="company[]" value="${company}">
<input type ="hidden" name="jobrole[]" value="${jobrole}">
<input type ="hidden" name="w_duration[]" value="${w_duration}">
<textarea class="d-none" name="workdesc[]">
${about}
</textarea>
        <h3>${company}</h3>
        <p> ${jobrole} - ${w_duration} </p>
        <p> ${about} </p>
        <button type="button" class="btn btn-sm btn-danger" onclick="removeexp(this)">Remove</button>
      </div>`)
$('#company').val('');
$('#jobrole').val('');
$('#e_duration').val('');
$('#work_desc').val('');
});





function removeskill(button){
  $(button).parent().remove();
}
function removeeducation(button){
  $(button).parent().remove();
}
function removeexp(button){
  $(button).parent().remove();
}
</script>
</body>
</html>
