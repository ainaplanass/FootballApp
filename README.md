
# School Football Club Management Web Application

## Introduction
Welcome to the **School Football Club Management Web Application**! This web platform is designed for tracking and managing a school football league, offering a comprehensive set of features.

![Captura de pantalla 2023-11-02 101626](https://github.com/ainaplanass/FootballApp/assets/82839054/0b7b1166-1df9-4b70-aeed-d8fa41e1a42b)

## Key Features
- **Team Management**: Create, edit, and delete football teams with ease. Create and manage players and coaches.
- **Game Management**: Manage games, including the local and visiting teams, game date and time, and score. Easily create, update, and delete games.
- **Role Management**: Define and manage roles within the application, allowing for role-based access control and privileges.
- **User Profiles**: Registered user profiles.

## System Architecture
This web application is built using the **Laravel** PHP framework, following the **Model-View-Controller (MVC)** design pattern. The **CRUD** (Create, Read, Update, Delete) operations are structured as follows:

### Models:
- **User**: Manages user information.
- **Team**: Handles football team data.
- **Player**: Manages player information.
- **Coach**: Manages coach profiles and details.
- **Club**: Manages information related to sports clubs.
- **League**: Handles league details.
- **Game**: Controls game-related information.

### MatchController.php
- **matches()**: Handles fetching and displaying the list of matches.
- **teamMatches($id)**: Retrieves and displays specific matches for a team.
- **storeMatch(Request $request, $id)**: Manages the creation of a new match and stores it in the database.
- **editMatch(Partit $partit)**: Displays the view for editing a specific match.
- **updateMatch(Request $request, $id)**: Updates the details of an existing match.
- **destroyMatch($id)**: Deletes a match from the database.

### TeamController.php
- **currentUser()**: Returns details of the current user.
- **teamsList(Request $request)**: Retrieves and displays a list of teams, allowing filtering by a specific sports club.
- **teams()**: Displays general information about teams.
- **showTeam($id)**: Displays details of a specific team and its related matches.
- **team($id)**: Displays the players and coaches of a specific team.
- **storeTeam(Request $request)**: Manages the creation of a new team and stores the information in the database.
- **destroyTeam(Request $request)**: Deletes a team and its associated logo, if it exists.
- **storePlayer(Request $request, $id)**: Creates a new player and assigns them to a specific team.
- **updatePlayer(Request $request, $id)**: Updates the details of an existing player.
- **destroyPlayer($id)**: Deletes a player from the database.
- **storeTrainer(Request $request, $id)**: Creates a new coach and assigns them to a specific team.
- **destroyTrainer($id)**: Deletes a coach from the database.

### UserController.php (Role Management)
- **usersList()**: Fetches and displays a list of users and roles.
- **assignRoles(Request $request, $userId)**: Assigns roles to a specific user and redirects to the user list with a success message.

## User Functionality
**Unregistered Users**
- Unregistered users only have access to the main menu page, where they can view news related to the football league.

**Registered Users**
- In addition to the above functionality, role "admin" can:
  - Create, edit, and delete teams.
  - Create, edit, and delete games.
  - Create, edit and delete team members.
- **Coaches**:
  - Create, edit, and delete games.
  - Create, edit and delete team members.
- **Players**:
  - View team and games information.

## Technologies Used
- **PHP & Laravel**: Full-stack development framework.
- **Jetstream**: Application starter kit for Laravel, providing user management, authentication, and more.
- **Livewire**: Enables page reactivity and dynamic loading.
- **Tailwind CSS**: Customizes the application's CSS styles.
- **SweetAlert2**: JavaScript popups for user confirmations and deletion prompts.

## Some of the views you will find:
![Captura de pantalla 2023-11-02 101638](https://github.com/ainaplanass/FootballApp/assets/82839054/5b3907c8-8056-4f62-901a-f2a951b228d9)

![Captura de pantalla 2023-11-02 101704](https://github.com/ainaplanass/FootballApp/assets/82839054/ce86bc97-3617-4020-bddf-26e591569ed6)

![Captura de pantalla 2023-11-02 101656](https://github.com/ainaplanass/FootballApp/assets/82839054/653ef306-b2c5-4210-80a4-da9174e5c50d)

![Captura de pantalla 2023-11-02 101719](https://github.com/ainaplanass/FootballApp/assets/82839054/f4e1c4eb-b3b9-4ba3-a4a3-997ace1e1319)

