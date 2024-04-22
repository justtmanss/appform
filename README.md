Application form based on HTML,CSS, PHP and MySQL(frontend and backend). 

![image](https://github.com/justtmanss/appform/assets/149933907/f7ed9736-d970-46c2-9a29-226152abb49b)

![image](https://github.com/justtmanss/appform/assets/149933907/93015567-8d1b-4e62-8d4f-c7de8ce37300)


The above is how  the form looks like.

Whenever filled(the form), the data from the user will be stored in a database connected on the backend. 
The PHP and MySQL are connected on XAMPP platform. 
The form containes: student_id(auto incremented),
                    student name,
                    date of birth,
                    gender,
                    address,
                    mobile  number,
                    email id,
                    and department.
                    
To install Xampp on your local device, redirect to: https://www.apachefriends.org/

For peeps who have never worked on XAMPP before: 
Install it from the above link according to your operating system.
Run the control panel, make sure everthing is working.
Run Apache and MySQL in the control panel to work with the above code.

In this code: 
The database is named applicationform, which consists of three tables: Student table (name, student_id, date of birth, gender, address, mobile number, email id, department) to store student details; 
Department table (department_id, department name) to store department details; 
and Mapping table (student_id, department_id) to store the student-department mapping data.



