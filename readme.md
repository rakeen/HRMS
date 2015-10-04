![wtfpl](http://www.wtfpl.net/wp-content/uploads/2012/12/wtfpl-badge-4.png)   

## HRMS

Human Resource Management System.  
For more info on how to use see *INSTRUCTION.txt~*

##[Project page](http://hrms-rak1.c9.io/public/home)

-------------------------------------------------------------------

### ToDo:

- [ ] add user avatars
- [ ] do something so that the DB tables get created automatically after visiting the first page
- [ ] link to profile of other user
- [x] add the responsive styles
- [x] upload file,store file(pro pic,cv etc)
- [x] implement the recruite section(call for interview)
- [x] login with email and delete email from CurrentUser table

- [ ] paginated notice,elist
- [ ] search(data binding?) in notice,elist


### Problems Faced:

- Git fetch/pull,upstreaming
- Form Hidden Field
- Pass a variable through controller into a view || use Session::get()
- Reseting Migrations

- problem with auth after refactoring the db tables
- register controller with multiple form in a single page
- can I use raw html form?

- Sidebar Toggle not working in review-leave after adding the toggle switch button

### Things to look in future:

- return Redirect::to()
- return Redirect::route()
- must have id field if you use any different model for auth
- must specify model and db table in auth config
- specify model relations for easy access of data
- model relations must specify both the foreign key and local key
- Auth::User() doesn't change. even if you change your model name


### Reference:


### Credits:

- [BucketAdmin by Themebucket](http://bucketadmin.themebucket.net/)
- [Laravel 4.2](http://laravel.com/docs/4.2/releases)
- [Codepen](http://codepen.io)
- [Unplash](https://unsplash.com/)
