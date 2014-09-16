What is the IE Skeleton?
========================

The IE Drupal Skeleton is a make file and installation profile to take the pain of setting up a new project every...single...time...
The make file pulls in the latest Drupal core and a selected list of modules.
The installation profile enables some modules and does some initial configuration such as CKEditor styles.
Basic content types are automatically set up such as Landing page, Basic page and news articles.
There is an included responsive theme which sets basic styles for html elements.

If you want to contribute see the @TODO section below the installation instructions.


How to use IE Skeleton
======================
Lee Owen v.0.1
--------------

1. Place the IE_Skeleton dir into your usual WAMP folder (www)
2. Make sure drush is installed 'drush help'
3. From the wamp folder (www) run 'drush make ie_skeleton/ie_skeleton.make [your project name]'
4. This will download the dependencies to the project directory. CD into project directory
5. Copy the ie_skeleton folder from within the parent folder into the profiles/ directory of the newly made project folder
6. Give the web server write privileges to the sites/default directory: 'chmod a+w -R sites/default'
7. ** Unfortunately doesn't work on windows ** Run 'drush site-install ie_skeleton --db-url=mysql://[db_user]:[db_pass]@localhost/[db_name] --site-name=[project_name]' from the project directory. Replace the [****] with your settings.
8. Run the site install via the browser if on windows :(
9. Add the 'ie_base_theme' to the 'sites/all/themes' folder; go to admin/appearance and enable and set default.

@TODO
1. Extend profile to add more content types (such as 'Slide') or see below for alternative
2. More automatic config of CKEditor & Text formats
3. Clean up base theme -it has a dependency on Inuit CSS framework which needs removing
4. Create more defaults to save more time!

Alternative to Profile complexity
---------------------------------

Use a modular approach utilising Features or better still the new Apps https://www.drupal.org/project/apps
See also for a demo: http://apps.leveltendesign.com/apps
Vid: http://youtu.be/SF7bZw9wCwg

You can have your own app server! One click install...

Benefits include: Version controllable -keep them in this repo?
Examples:

Carousel
Shop with filters
Dashboards
Events
News & Blogs
Twitter Feed

All the usual suspects...

These should all have basic styles applied via the Skeleton CSS automatically.


GIT
===

Create & push a new repository

    Enter the directory which you wish to import

    $ cd path/to/local/folder

    Initialise the folder as a Git repository

    $ git init
    >>Initialized empty Git repository in path/to/local/folder

    Add all files and commit for the first time

    $ git add .
    $ git commit -m "initial commit"
    >>[master (root-commit) 5cc0002] initial commit
    >>0 files changed, 0 insertions(+), 0 deletions(-)
    >>create mode 100644 README

    Add a remote reference for your new Codebase repository and push all changes to the new reference ('origin').

    $ git remote add origin git@codebasehq.com:iedesign/ie-design/ieskeleton.git
    $ git push -u origin master
    >>Counting objects: 3, done.
    >>Writing objects: 100% (3/3), 205 bytes, done.
    >>Total 3 (delta 0), reused 0 (delta 0)
    >>To git@codebasehq.com:iedesign/ie-design/ieskeleton.git
    >>* [new branch]      master -> master

Push an existing local repository

If you already have a repository and simply wish to push this to Codebase, you can follow the steps below after entering the directory for the existing repository.

    Setup the remote reference for the new Codebase repository and push all branches to the remote

    $ git remote add origin git@codebasehq.com:iedesign/ie-design/ieskeleton.git
    $ git push origin --mirror
    >>Counting objects: 3, done.
    >>Writing objects: 100% (3/3), 205 bytes, done.
    >>Total 3 (delta 0), reused 0 (delta 0)
    >>To git@codebasehq.com:iedesign/ie-design/ieskeleton.git
    >>* [new branch]      master -> master
    >>* [new branch]      development -> development