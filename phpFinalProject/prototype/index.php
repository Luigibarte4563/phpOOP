<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom font and scroll behavior */
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f3f4f6;
        }

        /* Styling for all form inputs/selects */
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }

        /* Hide default number input arrows */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Main container for the form card -->
    <div class="container bg-white p-8 md:p-10 shadow-2xl rounded-xl w-full max-w-lg mx-auto my-8">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center border-b-2 pb-3 border-indigo-500">
            Student Info Form
        </h2>

        <!-- The form -->
        <form action="save.php" method="post" class="space-y-5">

            <!-- Student number -->
            <div class="StudentNo">
                <h4 class="text-sm font-medium text-gray-700 mb-1">Student Number</h4>
                <input type="number" name="studentNumber" id="studentNumber" required class="form-input"
                    placeholder="e.g., 202412345">
            </div>

            <!-- First name -->
            <div class="firstName">
                <h4 class="text-sm font-medium text-gray-700 mb-1">First Name</h4>
                <input type="text" name="firstName" id="firstName" required class="form-input"
                    placeholder="Enter first name">
            </div>

            <!-- Last name -->
            <div class="lastName">
                <h4 class="text-sm font-medium text-gray-700 mb-1">Last Name</h4>
                <input type="text" name="lastName" id="lastName" required class="form-input"
                    placeholder="Enter last name">
            </div>

            <!-- Gender, Email, Contact, and Birthday grouped for better spacing on large screens -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Gender -->
                <div class="gender">
                    <h4 class="text-sm font-medium text-gray-700 mb-1">Gender</h4>
                    <select name="gender" id="gender" required class="form-input appearance-none bg-white">
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                </div>

                <!-- Birthday -->
                <div class="birthday">
                    <h4 class="text-sm font-medium text-gray-700 mb-1">Birthday</h4>
                    <input type="date" name="birthday" id="birthday" required class="form-input">
                </div>
            </div>

            <!-- Email -->
            <div class="Email">
                <h4 class="text-sm font-medium text-gray-700 mb-1">Email</h4>
                <input type="email" name="email" id="email" required class="form-input"
                    placeholder="you@example.com">
            </div>

            <!-- Contact Number -->
            <div class="contactNum">
                <h4 class="text-sm font-medium text-gray-700 mb-1">Contact Number</h4>
                <input type="number" name="contactNumber" id="ContactNumber" required class="form-input"
                    placeholder="e.g., 9123456789">
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Course -->
                <div class="course">
                    <h4 class="text-sm font-medium text-gray-700 mb-1">Course</h4>
                    <select name="course" id="course" required class="form-input appearance-none bg-white">
                        <option value="SITE">SITE</option>
                        <option value="SOC">SOC</option>
                        <option value="SIHM">SIHM</option>
                    </select>
                </div>

                <!-- Year Level -->
                <div class="yearLevel">
                    <h4 class="text-sm font-medium text-gray-700 mb-1">Year Level</h4>
                    <select name="yearLevel" id="yearLevel" required class="form-input appearance-none bg-white">
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="submit pt-3">
                <button type="submit" title="Save your info"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg transition duration-150 ease-in-out shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50">
                    Submit Enrollment
                </button>
            </div>

        </form>
    </div>
</body>

</html>
