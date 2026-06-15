<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Peter Kohl">
<title>login_module</title>
<link rel="stylesheet" href="../css-ommp/ommp-redesign.css">
</head>
<body class="ommp-site">
  <div class="ommp-page">
    <main class="ommp-shell">
      <div class="ommp-content">
        <header class="ommp-header">
          <a class="ommp-brand" href="../../index.html" aria-label="OMMP Startseite">
            <span class="ommp-mark">P</span>
            <span>
              <span class="ommp-brand-text">OMM<em>P</em></span>
              <span class="ommp-brand-sub">Online Mathe Module Prüfungen</span>
            </span>
          </a>
          <nav class="ommp-nav" aria-label="Navigation">
            <a href="../../index.html">Startseite</a>
            <a href="../../Mathe-Erklaer-Videos/ErklaerVideos.htm">Videos</a>
            <a href="https://sternenwind.ch/Kontakt/kohl.php" target="kontakt">Kontakt</a>
          </nav>
        </header>

        <section class="ommp-hero" aria-labelledby="module-title">
          <div>
            <p class="ommp-kicker">Schule gewählt: <span id="school-name">Übungsschule</span></p>
            <h1 id="module-title" class="ommp-title">Modul-Login OMM<em>P</em></h1>
            <p class="ommp-lead">Wähle Lehrperson und Übungsmodus, trage deinen Namen ein und starte danach die OMMP-Module.</p>
          </div>

          <figure class="ommp-book">
            <img src="user/buch-skizze.jpg" alt="OMMP Buch-Skizze">
            <figcaption>Online Mathe Module Prüfungen</figcaption>
          </figure>
        </section>

        <section class="ommp-section ommp-panel" aria-labelledby="form-title">
          <h2 id="form-title">Login-Daten</h2>
          <form class="ommp-module-form" name="teacherquestion" action="https://www.ommp.info/o_pruefungen_session/sessionhandler.php?logout_auftrag=nein" method="post">
            <input type="hidden" id="kuerzel_schule" name="kuerzel_schule" value="Uebungsschule">

            <div class="ommp-module-grid">
              <div class="ommp-field">
                <span class="ommp-field-title">Schule</span>
                <strong id="school-display">Übungsschule</strong>
                <small>Aus der vorherigen Auswahl übernommen.</small>
              </div>

              <div class="ommp-field">
                <label for="teachername">Lehrername</label>
                <select id="teachername" name="teachername"></select>
              </div>

              <div class="ommp-field">
                <label for="p_nr">Modus</label>
                <select id="p_nr" name="p_nr"></select>
                <small>Im Übungsmodus werden die Lösungen angezeigt.</small>
              </div>

              <div class="ommp-field">
                <label for="vorname">Schüler Vorname</label>
                <input id="vorname" type="text" name="vorname" value="" tabindex="1" autocomplete="given-name">
              </div>

              <div class="ommp-field">
                <label for="nachname">Schüler Nachname</label>
                <input id="nachname" type="text" name="nachname" value="" tabindex="2" autocomplete="family-name">
                <small>Session 90 Min. gültig</small>
              </div>

              <div class="ommp-field ommp-class-track-field">
                <span class="ommp-field-title">Klasse / Zug</span>
                <div class="ommp-inline-fields">
                  <label for="klasse">
                    <span>Klasse</span>
                    <select id="klasse" name="klasse" size="1" tabindex="3">
                      <option value=""></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </label>
                  <label for="zug">
                    <span>Zug</span>
                    <select id="zug" name="zug" size="1" tabindex="4">
                      <option value=""></option>
                      <option value="a">a</option>
                      <option value="b">b</option>
                      <option value="c">c</option>
                      <option value="d">d</option>
                      <option value="e">e</option>
                      <option value="f">f</option>
                      <option value="g">g</option>
                      <option value="h">h</option>
                      <option value="i">i</option>
                      <option value="j">j</option>
                      <option value="k">k</option>
                    </select>
                  </label>
                </div>
                <small>Bleibt serverkompatibel: gesendet werden weiterhin die Felder klasse und zug.</small>
              </div>

              <div class="ommp-field ommp-wide-field">
                <span class="ommp-field-title">Hinweis</span>
                <span>Diese Maske nutzt die originalen Feldnamen und sendet den finalen Login an den OMMP-Sessionhandler.</span>
              </div>
            </div>

            <div class="ommp-submit-row">
              <div class="ommp-secondary-actions">
                <input type="button" id="infobutton1" value="Infos zum Ablauf" onclick="info1()" tabindex="6">
                <input type="button" id="infobutton2" value="Infos zum Browser" onclick="info2()" tabindex="7">
              </div>
              <input class="ommp-primary-submit" type="submit" value="Login" tabindex="5">
            </div>

            <div class="ommp-info-output" id="spruch-div">
              <p id="info">...</p>
            </div>
          </form>
        </section>
      </div>
    </main>

    <footer class="ommp-footer">OMMP.sternenwind.ch &nbsp; Peter Kohl</footer>
  </div>

  <script>
    var schoolData = {
      "KS Ausserschwyz": {
        teachers: [
          { value: "KoP", label: "Kohl Peter" },
          { value: "UmA", label: "Umbach Andreas" },
          { value: "KeR", label: "Kern Ramona" },
          { value: "BaS", label: "Baer Sascha" },
          { value: "FrB", label: "Fritschi Barbara" },
          { value: "RaJ", label: "Rauchenstein Julia" },
          { value: "RaF", label: "Rauchenstein Felix" },
          { value: "KaD", label: "Kälin Daniel" },
          { value: "FrS", label: "Friedrich Sandro" },
          { value: "CvV", label: "Cvetkovic Visnja" }
        ],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "Gymi Bretten": {
        teachers: [
          { value: "KoJ", label: "Kohl Jürgen" },
          { value: "BrP", label: "Brueggemann Philipp" },
          { value: "PiN", label: "Pilz Nadine" },
          { value: "StS", label: "Steinmetz Silke" },
          { value: "GrI", label: "Graesser Ines" },
          { value: "WoA", label: "Wolff Andreas" },
          { value: "EmL", label: "Emslander Lotte" },
          { value: "ReJ", label: "Reich Jan" }
        ],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "KS Menzingen": {
        teachers: [{ value: "GuT", label: "Gültig Timo" }],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "Uebungsschule": {
        teachers: [{ value: "LeX", label: "Lehrer X" }],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "Gym Liestal": {
        teachers: [{ value: "BeI", label: "Bertiller Isabelle" }],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "KS Uetikon": {
        teachers: [{ value: "LoV", label: "Vanessa Loureiro" }],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      },
      "Gymi Einsiedeln": {
        teachers: [{ value: "BrS", label: "Brunner Silvia" }],
        exams: [
          { value: "0", label: "Übungsmodus" },
          { value: "1781481600", label: "Prüfung: 15 06 2026" }
        ]
      }
    };

    function selectedSchool() {
      var params = new URLSearchParams(window.location.search);
      var school = params.get("kuerzel_schule") || "Uebungsschule";
      return schoolData[school] ? school : "Uebungsschule";
    }

    function fillSelect(id, options) {
      var select = document.getElementById(id);
      select.innerHTML = "";
      options.forEach(function(option) {
        var item = document.createElement("option");
        item.value = option.value;
        item.textContent = option.label;
        select.appendChild(item);
      });
    }

    var school = selectedSchool();
    document.getElementById("school-name").textContent = school;
    document.getElementById("school-display").textContent = school;
    document.getElementById("kuerzel_schule").value = school;
    fillSelect("teachername", schoolData[school].teachers);
    fillSelect("p_nr", schoolData[school].exams);

    var anz_aufrufe1 = 0;
    var anz_aufrufe2 = 0;

    function info1() {
      anz_aufrufe1 = anz_aufrufe1 + 1;
      if (anz_aufrufe1 % 2 == 1) {
        document.getElementById("info").innerHTML = "Die basalen Grundfertigkeiten sollen im Unterricht wie bisher erarbeitet werden. Diese Module dienen zur Übung. Der Lehrer kann individualisieren, in Übungsphasen können einzelne Gruppen verschiedene Themen bearbeiten, der Lehrer kann beraten.<br><br>Bewährt haben sich: Übungsprozess im Übungsmodus, gemeinsame Fehleranalyse, klar abgesprochener Prüfungsmodus und bei Bedarf erneutes Üben mit Nachprüfung.";
        document.getElementById("infobutton1").value = "Weniger Info";
      } else {
        document.getElementById("info").innerHTML = "...";
        document.getElementById("infobutton1").value = "Infos zum Ablauf";
      }
    }

    function info2() {
      anz_aufrufe2 = anz_aufrufe2 + 1;
      if (anz_aufrufe2 % 2 == 1) {
        document.getElementById("info").innerHTML = "Diese Module benutzen keine Cookies. Es werden PHP-Session-Variablen genutzt, um z.B. Benutzername und Klasse während des Übens zu speichern.";
        document.getElementById("infobutton2").value = "Weniger Info";
      } else {
        document.getElementById("info").innerHTML = "...";
        document.getElementById("infobutton2").value = "Infos zum Browser";
      }
    }
  </script>
</body>
</html>
