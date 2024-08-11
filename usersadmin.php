<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      $title = "Users";
      include "./partials/head.php";
      include "./includes/authentication.php";
      include "./includes/isAdminOnPage.php";
      require "./config/utils.php";
    ?>
  </head>

  <body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-900">

    <div class="overall wrapper overflow-x-hidden">

      <?php
      include "./partials/sidebar.php"
      ?>


      <div id="content-wrapper" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ms-0 me-0 md:ms-64">

        <?php
        include "./partials/navbar.php"
        ?>

        <main class="pt-20 -mt-2">
          <div class="mx-auto py-2 sm:px-2">
            <!-- Header row -->
            <div class="flex flex-row flex-wrap">
              <div class="shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">Users</p>
              </div>
            </div>
            <!-- Content row -->
            <div class="content-row flex flex-row flex-wrap">
              <div class="shrink max-w-full px-4 w-full mb-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                  <div class="relative">
                    <div class="overflow-auto">
                      <div class="datatable-wrapper">
                        <div class="datatable-container">
                          <table class="w-full max-w-full border-spacing-0 border-collapse overflow-x-auto">
                            <thead>
                              <tr>
                                <th class="p-4 text-left">Name</th>
                                <th class="p-4 text-left">Email</th>
                                <th class="p-4 text-left">Role</th>
                                <th class="p-4 text-left">Email Status</th>
                                <th class="p-4 text-left">Date Added</th>
                                <th class="p-4 text-left">Delete</th>
                                <th class="p-4 text-left">Password</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT id, username, firstname, lastname, email, email_verified, role, created_at, last_password_reset FROM users";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                  while ($users_row = $result->fetch_assoc()) {
                                    $firstname = ucfirst($users_row["firstname"]);
                                    $lastname = ucfirst($users_row["lastname"]);
                                    $emailStatus = $users_row["email_verified"] == 1 ? "verified" : "pending";
                                    $isverified = $users_row["email_verified"] == 1 ? true : false;
                                    $role = ucfirst($users_row["role"]);
                                    $lastResetTime = timeAgo($users_row['last_password_reset']);

                                    echo "<tr class='border-b border-gray-100'>
                                      <td class='p-4'>{$firstname} {$lastname}</td>
                                      <td class='p-4'>{$users_row["email"]}</td>
                                      <td class='p-4'>{$role}</td>
                                      <td class='p-4'>
                                        <span class='p-2 text-sm font-semibold leading-tight " . ($users_row["email_verified"] == 1 ? "text-green-700 bg-green-100" : "text-yellow-700 bg-yellow-100") . " rounded-md'>
                                          {$emailStatus}
                                        </span>
                                      </td>
                                      <td class='p-4'>{$users_row["created_at"]}</td>
                                      <td class='p-4'>
                                      <button id='{$users_row["id"]}' class='delete-buttons text-white bg-red-400 rounded-md px-2 py-1' type='button'>Delete</button>
                                      </td>
                                      <td class='p-4'>
                                      <button id='{$users_row["id"]}' class='reset-password-buttons text-white bg-yellow-400 rounded-md px-2 py-1' type='button'>Reset</button>
                                      </td>
                                    </tr>";
                                  }
                                } else {
                                  echo "<tr><td colspan='6' class='p-4 text-center'>No users found</td></tr>";
                                }
                                $conn->close();
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>


        <?php
        include "./partials/footer.php"
        ?>


      </div>


    </div>

    <div class="toast-container fixed bottom-5 left-5 w-full"></div>


    <?php
      include "./partials/navigationJavascriptTags.php";
    ?>
    <script src="./js/adminManageUsers.js" defer type="module"></script>
  </body>

</html>