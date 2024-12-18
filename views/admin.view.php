<body>  
<br><br>    
<h3>Add New Project</h3>
    <form action="../scripts/create.php" method="POST">
        <label for="page">Page:</label>
        <input type="text" id="page" name="page" required>
        <label for="title">Title:</label>
        <input type="title" id="title" name="title">
        <label for="languages">Languages:</label>
        <input type="languages" id="languages" name="languages">
        <label for="link">Link:</label>
        <input type="link" id="link" name="link">
        <button type="submit">Create</button>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" style ="width: 100%" maxlength="600"></textarea>
    </form>
    <h3>Existing Projects</h3>
    <form method="POST">
        <label for="filter">Filter:</label>
        <select id="filter" name="filter">
            <option value="all">All Projects</option>
            <option value="projects">Projects Only</option>
        </select>
        <button type="submit">Apply Filter</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page</th>
                <th>Title</th>
                <th>Content</th>
                <th>Languages</th>
                <th>Link</th>
                <th>Change</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $filter = $_POST['filter'] ?? 'all';
            foreach ($data as $projects) 
            {
                if ($filter == 'all' || ($filter == 'projects' && $projects['title'] == 'projects')) {
                    echo "<tr>";
                    echo "<td>{$projects['id']}</td>";
                    echo "<td>{$projects['page']}</td>";
                    echo "<td>{$projects['title']}</td>";
                    echo "<td>{$projects['content']}</td>";
                    echo "<td>{$projects['languages']}</td>";
                    echo "<td>{$projects['link']}</td>";
                    echo "<td><a href='" .  URL_ROOT . "/scripts/edit.php?id={$projects['id']}'>Edit</a> | <a href='" .  URL_ROOT . "/scripts/delete.php?id={$projects['id']}' onclick='return confirm(\"Are you sure you want to delete this project?\");'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            include_once(APP_ROOT . '/views/nav.view.php')
        ?>
        </tbody>
    </table>
</body>
</html>
<?php include_once(APP_ROOT . '/views/footer.view.php'); ?>
