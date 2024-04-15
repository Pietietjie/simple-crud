# Simple Crud app for job application on 14 April 2024
## Requirements
```
A web-based system where a user can log in and out of the system to manage people via CRUD
operations.
 
Herewith the fields that need to be managed: (all fields are required)
 
* Name
* Surname
* South African Id Number
* Mobile Number
* Email Address
* Birth Date
* Language (Single Selection)
* Interests (Multiple Selection)
 
On capturing a person: An email needs to be sent out to the person captured informing them that
they’ve been captured on the system.
 
If using a framework: Fire an event that triggers a job.
```

## Action plan
- [ ] Initialise Laravel application
- [ ] Use Laravel's auth scaffholding
- [ ] Add Migrations for the data that needs to be captured
    - [ ] Add Seeders for test and "real-world" data
- [ ] Create routes and a controller for the data capture
    - [ ] Create front end pages
    - [ ] Find an implementation of a multi select that is simple
- [ ] Send email
    - [ ] Set up a queue for the Jobs
    - [ ] Create email template and job
    - [ ] Add Observer to queue the mail
- [ ] Set up cloud hosting
    - [ ] Look at Heroku like services to host the project
    - [ ] See if there is an free mailer that for the demo project if the provider does not all ready have one

## Somethings to keep in mind
- I am just going to make an MVP
- I will be using the latest versions of most of the techonolgies that I will be using as there is no restrictions

