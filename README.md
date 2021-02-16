# Geekbot Technical Assessment

## Starting

In the project directory, you can run:

`docker-compose up -d`

## Services

1. Frontend Url: http://exam.geekbot.com
2. Backend Url: http://exam.geekbot.com/api/
3. MySQL connection credentials: 
	- Database: geekbot_exam
    - User: geekbot_exam
    - Password: geekbot_exam
## Documentation

We are using the following frameworks. It would be helpful if you go through their documentation.

- Frontend Now UI Kit: https://demos.creative-tim.com/now-ui-kit-react/#/documentation/introduction?ref=nukr-github-readme
- Backend Slim Framework: https://www.slimframework.com/docs/v4/

### Tasks

- [X] Convert a static page to a dynamic one: http://exam.geekbot.com/landing-page

    - Your task is to convert the existing page to a dynamic version. In order to do this you will have to set up a database schema, create all the needed controllers, models and views.

- [X] Test our users API: http://exam.geekbot.com/api/users/ 

    - We think a bug might have slipped our latest API release. We love to use a debugger to solve such issues.
    - For your convenience the debugger is ready to use :)

- [X] Security
    - There is an extremely unsafe operation we allow. Can you spot it?

- [X] Unit test:

    - When you finish the migration from a static to a dynamic website use the templates found under the tests subdirectory to test your newly create routes and models

    - You can execute the test by running: `./tests.sh` in the base directory

- [X] Caching: 

    - Think of data that could be cached and implement a in memory caching mecahism. (ex: redis or memcache)

- [X] CTF (definition: https://dev.to/atan/what-is-ctf-and-how-to-get-started-3f04)

    - There is an easter egg hidden in the backend source. Let's see if you can find it.
    - It would help if you first solve the bug.
    - For a bonus try and create an account in hack the box (https://www.hackthebox.eu/) :)

- [X] Use the slack api:

    - Implement a simple oauth flow to get access to a token to use slack's api. (by using routes in our framework)
    - Using this token and slack api get access to the following:
        - All the public and private channels you have access from your workspace
        - Your message history from a specific channel of your choice
        - Your profile image
    - Use the above to populate the profile page

- [X] Realtime (Nodejs or Phoenix)

    - After you have implemented the slack api calls,
    try updating the channels, private channels and latest post in the profile page in realtime.


**GOOD LUCK AND REMEMBER TO HAVE FUN**