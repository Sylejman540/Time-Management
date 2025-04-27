    <?php
    session_start();
    require_once 'process.php';

    // fetch all tasks
    $tasks = [];
    $res   = $mysqli->query("SELECT * FROM data ORDER BY id DESC")
        or die($mysqli->error);
    while ($row = $res->fetch_assoc()) {
        $tasks[] = $row;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="manage.css">
    <title>Manage Your Time</title>
    </head>
    <body class="font-sans">

    <!-- Desktop Header + Nav -->
    <header class="flex justify-around items-center p-2 bg-[#FCF6F6]">
        <article class="flex">
        <img src="images/logo.png" alt="Logo" class="w-12 h-12">
        <h1 class="text-4xl font-bold mr-20">
        <a href="/Time Management/main-page/main.php">Time<span class="text-[#ffe270ff]">Wise</span></a>
        </h1>
        </article>
        <img src="images/menu.png" alt="Menu" class="md:hidden block w-8 h-8" id="icon">
        <img src="images/x-symbol.png" alt="Close" class="hidden w-8 h-8" id="close-icon">
        <nav>
        <ul class="hidden md:flex space-x-8 font-bold">
            <li><a href="#" class="hover:text-[#fee685ff]">Home</a></li>
            <li><a href="#manage" class="hover:text-[#fee685ff]">Time Management</a></li>
            <li><a href="#about" class="hover:text-[#fee685ff]">About Us</a></li>
            <li><a href="#contact" class="hover:text-[#fee685ff]">Contact</a></li>
        </ul>
        </nav>
    </header>

    <!-- Mobile Nav -->
    <nav>
        <ul id="nav" class="hidden space-x-8 font-bold md:hidden ml-3">
        <li><a href="#" class="hover:text-[#fee685ff]">Home</a></li>
        <li><a href="#manage" class="hover:text-[#fee685ff]">Time Management</a></li>
        <li><a href="#about" class="hover:text-[#fee685ff]">About Us</a></li>
        <li><a href="#contact" class="hover:text-[#fee685ff]">Contact</a></li>
        </ul>
    </nav>

    <!-- Flash Message -->
    <?php if (isset($_SESSION['message'])): ?>
        <div class="max-w-xl mx-auto mt-6 p-4 rounded bg-green-100 border border-green-300 text-green-800">
        <?= $_SESSION['message']; unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>

    <!-- Add / Edit Form -->
    <div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded shadow">
        <form action="process.php" method="POST" class="flex gap-4">
        <input
            type="text"
            name="name"
            required
            value="<?= htmlspecialchars($name) ?>"
            class="flex-1 border-2 border-gray-300 p-2 rounded"
            placeholder="Enter your task"
        >
        <?php if ($update): ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <button
            type="submit"
            name="update"
            class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded"
            >Update</button>
            <a
            href="manage.php"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded"
            >Cancel</a>
        <?php else: ?>
            <button
            type="submit"
            name="save"
            class="bg-[#ffe270ff] text-black cursor-pointer px-4 py-2 rounded"
            >Submit</button>
        <?php endif; ?>
        </form>
    </div>

    <!-- Kanban Board -->
    <div class="container mx-auto max-w-6xl px-4 mt-10 flex flex-col md:flex-row md:justify-center md:items-start gap-8">
  <!-- To Do -->
  <div id="left" class="column w-full md:w-1/3 bg-white p-4 rounded shadow border-2 border-dashed border-gray-300">
    <h2 class="text-center font-bold mb-4 text-black">To Do</h2>
    <?php foreach ($tasks as $task): ?>
      <div
        class="card w-full bg-gray-200 text-gray-800 mb-4 p-3 rounded flex justify-between items-center cursor-grab"
        draggable="true"
        data-id="<?= $task['id'] ?>"
      >
        <span><?= htmlspecialchars($task['name']) ?></span>
        <span class="flex space-x-2">
          <a
            href="manage.php?edit=<?= $task['id'] ?>"
            class="bg-blue-500 hover:bg-blue-600 px-2 py-1 rounded text-sm text-white"
          >Edit</a>
          <a
            href="process.php?delete=<?= $task['id'] ?>"
            onclick="return confirm('Delete this task?')"
            class="bg-red-500 hover:bg-red-600 px-2 py-1 rounded text-sm text-white"
          >Delete</a>
        </span>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Doing -->
  <div id="middle" class="column w-full md:w-1/3 bg-white p-4 rounded shadow border-2 border-dashed border-gray-300">
    <h2 class="text-center font-bold mb-4 text-black">Doing</h2>
  </div>

  <!-- Done -->
  <div id="right" class="column w-full md:w-1/3 bg-white p-4 rounded shadow border-2 border-dashed border-gray-300">
    <h2 class="text-center font-bold mb-4 text-black">Done</h2>
  </div>
</div>


    <!-- Footer -->
    <section class="bg-[#FCF6F6] md:py-20 py-10 px-10 md:flex justify-around">
        <div class="grid">
        <h1 class="text-4xl font-bold text-center md:text-start mb-2">
            Time<span class="text-[#ffe270ff]">Wise</span>
        </h1>
        <p class="text-center md:text-start text-gray-600">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, esse?
        </p>
        <article class="flex justify-center md:justify-start">
            <img src="images/insta.jpg" alt="Instagram" class="rounded-xl w-12 h-12">
            <img src="images/facebook.jpg" alt="Facebook" class="rounded-xl w-7 h-7 mt-2.5">
            <img src="images/x.jpg" alt="X" class="rounded-xl w-7 h-7 mt-2.5">
        </article>
        </div>

        <article class="grid">
        <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Info</h1>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Formats</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">FAQ</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Pricing</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Status</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Policy</a>
        </article>

        <article class="grid">
        <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Resources</h1>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">API</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Form Validation</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Community</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Visibility</a>
        </article>

        <article class="grid">
        <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Getting Started</h1>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Themes</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Elements</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Global</a>
        <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Usages</a>
        </article>
    </section>
    <div class="text-center bg-[#FCF6F6]">
        <p class="text-gray-600">© 2025 TimeWise. All rights reserved.</p>
    </div>

    <!-- Drag & Drop -->
    <script src="main.js" defer></script>
    </body>
    </html>
