<div class="container my-3">
  <h1 class="my-3">Enter your Details</h1>
  <form method="post" action="<?=$action->helper->url('action/createresume')?>" class="border border-2 rounded-2 p-2">
  <p align="left" class="fs-4"><i class="bi bi-person-badge-fill"></i> Personal details</p>
      <div class="row justify-content-between">
          <div class="row col-6 mb-3">
          
            <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Name</label>
            <div class="">
              <input type="name" class="form-control" name="name" placeholder="Enter your name" required >
            </div>
          </div>
          <div class="row col-6 mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Headline</label>
            <div class="">
              <input type="text" class="form-control" name="headline" placeholder="enter your job description" required >
            </div>
          </div>
      </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Objective</label>
      <div class="col-sm-10">

        <textarea class="w-100"name="objective" required></textarea>
      </div>
    </div>
    <hr> 
    <p align="left" class="fs-4"><i class="bi bi-person-lines-fill"></i> Contact details</p>
    <div class="row justify-content-between">
    <div class="row col-6 mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Email</label>
      <div class="">
        <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
      </div>
    </div>
    <div class="row col-6 mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Mobile</label>
      <div class="">
        <input type="mobile" class="form-control" name="mobile" placeholder="Enter your Mobile Number" required >
      </div>
    </div>
  </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4">Address</label>
      <div class="col-sm-10">
        <input type="text" name="address" placeholder="Enter Your Address" class="form-control" required >
      </div>
    </div>
    <hr>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-tools"></i>Skills</label>
      <div id="skills">

      </div>
      <div class="input-group mb-3">
    <input type="text" class="form-control" id="userskill" placeholder="Enter Your Skills" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-primary" type="button" id="addskill">Add Skill <i class="bi bi-plus-circle-fill"></i></button>
  </div>
  </div>
  <!-- education -->
    <hr>
    <div class="mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4 text-left"><i class="bi bi-book-half"></i> Education</label>
      <div id="educations" class="" >
        
      </div>
      <div class="d-flex gap-2">
        <input type="text"  class="form-control" id="college"  placeholder="Institute" >
        <input type="text"  class="form-control" id="course" placeholder="Course" >
        <input type="text"  class="form-control" id="gpa" placeholder="CGPA">
        <input type="text"  class="form-control" id="e_duration" placeholder="time period">
        <button type="button" class="btn btn-primary" id="addeducation">Add <i class="bi bi-plus-circle-fill"></i></button>
      </div>
    </div>


<!-- experience  -->
    <hr>
    <div class="mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-briefcase-fill"></i> Experience</label>
      <div id="exps" class="" >
        
      </div>
      <div class="d-flex gap-2">
        <input type="text"  class="form-control" id="company"  placeholder="enter the company">
        <input type="text"  class="form-control" id="jobrole" placeholder="enter you role">
        <input type="text"  class="form-control" id="w_duration" placeholder="work duration">

      </div>
      <span class="d-block mt-2">About your work</span>
      <textarea id="work_desc"  class="w-100 my-2">

      </textarea>
      <button type="button" class="btn btn-primary" id="addexp">Add <i class="bi bi-plus-circle-fill"></i></button>
    </div>

    

    <button type="submit" class="btn btn-warning"><i class="bi bi-folder-plus"></i> Create Resume</button>
  </form>
</div>