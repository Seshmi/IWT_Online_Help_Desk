var coAndModels = {};
coAndModels["sliit"] = ["BSc (Hons) In Information Technology - Software Engineering","BSc (Hons) In Information Technology - Information Systems Engineering","BSc (Hons) In Information Technology - Interactive Media","BSc (Hons) In Information Technology - Data Science","BSc (Hons) In Information Technology - Cyber Security"];
coAndModels["sjp"] = ["BSc (Hons) Information and Communication Technology","BSc Business Administration","Bachelor of Engineering Technology in Archaeotechnology","B.A. Special Degree Course-Economics","B.A. Special Degree Course -English Language","B.A. special Degree Course -English Literature"];
coAndModels["colombo"] = ["Bachelor of Science Biological Sciences","Bachelor of Science Molecular Biology & Biochemistry","Bachelor of Science Industrial Statistics & Mathematical Finance","Bachelor of Science Physical Sciences"];
coAndModels["NSBM"] = ["BSc (Hons) International Management and Business","BSc (Hons) Marketing Management","BSc (Hons) Accounting and Finance","BSc (Hons) Human Resource Management"];

function ChangeCourseList() {
	var courseList = document.getElementById("course");
	var modelList = document.getElementById("comodel");
	var selco = courseList.options[courseList.selectedIndex].value;
  
  while (modelList.options.length) {
    modelList.remove(0);
  }
  var courses = coAndModels[selco];
  if (courses) {
    var i;
    for (i = 0; i < courses.length; i++) {
      var course = new Option(courses[i], i);
      modelList.options.add(course);
    }
  }
} 