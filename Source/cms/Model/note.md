Articles
- Id : init
- title: string
- description: string
- category: string
- body__text: string
- date: date
- written_by: string

Admin
- Id: string
- photo: string
- first__name: string
- last__name: string
- username: string > fristname and lastname
- dob(): date
- employed__date: date;






Database Design Resources
- (https://www.guru99.com/database-design.html)


Change Database Connection Password


Moving file into another folder resources
- https://www.php.net/manual/en/function.move-uploaded-file.php



Resources: https://bayinmin.medium.com/application-security-what-is-server-side-input-validation-why-is-it-needed-anyway-e0613c733548
https://blog.netwrix.com/2018/05/15/top-10-most-common-types-of-cyber-attacks/

Don't rely on client side input validation. The data from client can be
manipulated in many ways.

The validation you perform on the front end, you have to do the same this on the
server side.

Some common attacks developers recieve:
1. Stored XSS
2. Cross Site Scripting XSS
3. server side input validation
4. weak input validation

Beware of proxy. Users can use it to by pass the validation check
They can be used to easily intercept/replay the HTTP Request

You can fix these issues by server side validation