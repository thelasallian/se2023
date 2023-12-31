<!-- Header -->
<header class="subpage-header" id="<?= $id; ?>">
    <div class="container d-flex flex-column align-items-center">
        <!-- Back Button -->
        <a
         id="back-button" 
         href="index.php" 
         class="button button-white align-self-start"
         data-aos="fade-in"
         data-aos-delay="1100">
            ← Back
        </a>
        <!-- Subtitle -->
        <h2 
         class="subtitle"
         data-aos="fade-down"
         data-aos-duration="1000">
            <span id="typed"></span>
        </h2>
        <!-- Description -->
        <p 
         class="description mb-4"
         data-aos="fade-up"
         data-aos-duration="1000">
         Knowing what candidates stand by is crucial in casting a well-informed vote. In this year's Fast Talk, USG hopefuls for Special Elections 2023 share their takes on numerous pressing matters in and out of the University, ranging from DLSU's data security incident to the Israel-Palestine conflict.
        </p>
        

        <?php 
        $contentUpdates = json_decode(file_get_contents('https://github.com/thelasallian/ge2023/blob/main/json/content-updates.json?raw=true'), true);
        ?>

        <?php if (!($contentUpdates["fast-talk-infog"] == " ")): ?>
            <!-- View as Infog -->
            <a href="<?= $contentUpdates["fast-talk-infog"]; ?>" class="button button-white">View as Infographic</a>
        <?php else: ?>
            <a style="cursor: not-allowed;" class="button button-white">Infographic Coming Soon</a>
        <?php endif; ?>
    </div>
</header>

<!-- Navbar -->
<nav class="sticky-top">
    <div class="container">
        <select name="select-issue" id="select-issue">
            <option selected disabled>Select an Issue</option>
            <optgroup label="Yes or No" id="yes-or-no-optgroup">
                <option value="abstention">PH abstention to Israel-Palestine ceasefire</option>
                <option value="confidential-funds">Confidential Funds</option>
                <option value="suspend-maharlika">Suspension of the Maharlika Investment Fund</option>
                <option value="nvc">Shift from Non-Fraternity Contract to Non-Violence Contract</option>
                <option value="privatization-mrt-lrt">Privatization of MRT3, LRT2</option>
                <option value="ai-academia">AI use in Academia</option>
                <option value="deactivate-alumni-emails">Deactivating undergrad emails of alumni</option>
            </optgroup>
            <optgroup label="0.0 to 4.0" id="graded-optgroup">
                <option value="incident-response">DLSU's response to data security incident</option>
                <option value="marcos-economy">Marcos Jr. admin’s economic performance</option>
                <option value="usg-performance">Performance of AY 2022-2023 USG Executive Board</option>
                <option value="ph-press-freedom">State of Philippine press freedom</option>
                <option value="web-platforms">DLSU’s web-hosted platforms</option>
                <option value="hybrid-setup">DLSU hybrid setup and policies</option>
                <option value="west-ph-sea-response">Philippines' response to West Philippine Sea dispute</option>
            </optgroup>
        </select>
    </div>
</nav>