<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      $title = "Employees";
      include "./partials/head.php";
      if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
        include "./includes/authentication.php";
      }
    ?>
  </head>

  <?php
    // SQL query to fetch data from Employees table
    $sql = "SELECT IDNum, FirstName, LastName, Position FROM Employees";
    $result = $conn->query($sql);
  ?>

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
                <p class="text-xl font-bold mt-3 mb-5">Employees</p>
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
                          <table class="w-full max-w-full border-spacing-0 border-collapse">
                            <thead>
                              <tr>
                                <th class="p-4 text-left">ID Number</th>
                                <th class="p-4 text-left">First Name</th>
                                <th class="p-4 text-left">Last Name</th>
                                <th class="p-4 text-left">Position</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                if ($result->num_rows > 0) {
                                  // Output data of each row
                                  while($employee_row = $result->fetch_assoc()) {
                                    echo "<tr class='border-b border-gray-100'><td class='p-4'>" . $employee_row["IDNum"]. "</td><td class='p-4'>" . $employee_row["FirstName"]. "</td><td class='p-4'>" . $employee_row["LastName"]. "</td><td class='p-4'>" . $employee_row["Position"]. "</td></tr>";
                                  }
                                } else {
                                  echo "<tr><td colspan='4' class='p-4 text-center'>No employees found</td></tr>";
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
    <?php
      include "./partials/navigationJavascriptTags.php";
    ?>
  </body>

</html>