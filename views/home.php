<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Your styles go here */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header, section, footer {
    margin: 20px;
}

.wiki-card {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 15px;
}

form {
    display: grid;
    gap: 10px;
    max-width: 400px;
    margin: auto;
}

</style>
<body>
    <header>
        <h1>Welcome to the Wiki App</h1>
    </header>

    <section id="wikis">
        <h2>All Wikis</h2>
        <div id="wikis-list">
            <?php
            // Fetch and display all wikis here using PHP
            // Example using dummy data:
            $dummyWikis = [
                ["id" => 1, "title" => "Sample Wiki 1", "content" => "Lorem ipsum...", "category" => "Sample Category", "tags" => ["Tag1", "Tag2"]],
                ["id" => 2, "title" => "Sample Wiki 2", "content" => "Lorem ipsum...", "category" => "Sample Category", "tags" => ["Tag3", "Tag4"]],
                // Add more dummy wikis as needed
            ];

            foreach ($dummyWikis as $wiki) {
                echo "<div class='wiki-card'>";
                echo "<h3>{$wiki['title']}</h3>";
                echo "<p>{$wiki['content']}</p>";
                echo "<p>Category: {$wiki['category']}</p>";
                echo "<p>Tags: " . implode(", ", $wiki['tags']) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <section id="add-wiki">
        <h2>Add a New Wiki</h2>
        <form name="contactForm" id="contactForm" method="post" action="?route=addwiki" enctype="multipart/form-data">
                        <fieldset class="row">

                        <div class="column lg-12 form-field" style="margin-bottom:30px">
                                 <input type="file" class="u-fullwidth h-remove-bottom" placeholder="Image..." style="cursor : pointer;" accept=".jpg, .jpeg, .png," name="image">
                            </div>
                            
                            <div class="column lg-12 form-field">
                                <input name="title" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="title" value="" type="text">
                            </div>
                            
                            <div class="column lg-12 message form-field">
                                <textarea name="description" id="cMessage" class="u-fullwidth" style="resize: none;" placeholder="description"></textarea>
                            </div>
                            
                            <div class="column lg-6 tab-12 form-field"  style="cursor: pointer; " >
                            <select name="category">
                                <option value="">Choese Your Category...</option>
                                <?php foreach($resultctgr As $ctgr): ?>
                                    <option value="<?= $ctgr['id'] ?>"><?= $ctgr['name'] ?></option>
                                    <?php endforeach ?>
                                    <!-- Add more options as needed -->
                                </select>                            
                            </div>

                            <div class="column lg-6 tab-12 form-field" style="margin-bottom:30px">
                                <h4 style="margin: 0;">Choese The Tags :</h4>
                                <div  style="cursor: pointer; overflow-y: scroll; max-height: 200px; padding:10px 20px">
                                    
                                    <?php foreach($resultstags as $resulttag): ?>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_<?= $resulttag['id'] ?>" name="selectedTags[]" value="<?= $resulttag['id'] ?>">
                                            <label for="checkbox_<?= $resulttag['id'] ?>"><?= $resulttag['name'] ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                        
                                </div>
                                        
                            </div>
                           
                                        
                            </div>                              

                            

                            <div class="column lg-12">
                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Article" type="submit">
                            </div>
                            
                        </fieldset>
                    </form>
    </section>

    <footer>
        <p>&copy; 2024 Wiki App</p>
    </footer>
</body>
</html>
