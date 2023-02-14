# Personal Page Project

## Story  
___
as i needed a **strong Resume** i decided to use my Abilities in several projects with focusing each one on several **Aspects** of Programming Techs that i know.
* this MD is built with "Markdown Monster Application"
* if you want to have a cooperate project call me in [linkedin](https://www.linkedin.com/in/mohammad-sharafi-a51120258/)  
* i am eager to hear your ideas about the present project
* i am going to update it regularly so this MD will change again if i reached to a point that i felt everything is fine i put a Green Heart :green_heart: next to the name of project in first line

## Project Details
___
### Main Subjects
1. Function 
2. API
3. Flex Box
4. Data base
5. CRUD

### Main Point
it is going to mimic an Application that is divided in three pages:
* Option
* Main 
* Notes

##### Option
its mainly about choosing and setting up APIs and customizing the view.

##### Main
shows APIs in selected Order and Shows the Selected Default Note which is chosen in Notes section 

##### Notes
it is a CRUD notebook

### Directories
`/public` index.php is located here

`/src`:

`/css` i am using Tailwind CDN

`/js` i have no intention to use js for now

`/php`:

`/api` i am not sure to keep it here, i am going to put API Files here

`/component` NavBar or SideBar is going to be here

`/database` connection to database

`/main function` Back End of Each View 

`/routing` Routing System

`/view` Views

### System Routing
i am using a simple Routing System, it is not The Best Practice but makes the project Clean for my main purposes
its mainly a function that receives  `$_SERVER["REQUEST_URI"]` and with accordance to its value changes both view and function in index.php, this function is located at `/routing/web.php` 
