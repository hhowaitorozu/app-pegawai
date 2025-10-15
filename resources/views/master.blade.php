<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App Pegawai')</title>

    <style>
        :root{
          --bg: #ffffff;
          --card: #f7f8fa;
          --text: #1f2937;
          --muted: #6b7280;
          --accent: #0f6f8b;
          --accent-weak: rgba(15,111,139,0.1);
          --border: #e6e9ee;
          --radius: 10px;
          --gap: 1rem;
          --max-width: 1100px;
          --shadow: 0 6px 18px rgba(31,41,55,0.06);
        }

        *{box-sizing:border-box;}
        html,body{height:100%;}
        body{
          margin:0;
          font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI",
                       Roboto, "Helvetica Neue", Arial;
          background:var(--bg);
          color:var(--text);
          line-height:1.45;
          -webkit-font-smoothing:antialiased;
          -moz-osx-font-smoothing:grayscale;
          padding:0 1rem;
        }

        header, main, footer{
          max-width:var(--max-width);
          margin:0 auto;
          width:100%;
        }

        /* Header */
        header{
          display:flex;
          align-items:center;
          justify-content:space-between;
          gap:var(--gap);
          padding:1.05rem 0;
          border-bottom:1px solid var(--border);
          position:sticky;
          top:0;
          backdrop-filter: blur(6px);
          background:rgba(255,255,255,0.85);
          z-index:20;
        }

        header h1{
          margin:0;
          font-size:1.25rem;
          font-weight:600;
          letter-spacing:0.2px;
        }

        /* Navigation */
        nav ul{
          list-style:none;
          margin:0;
          padding:0;
          display:flex;
          gap:0.75rem;
          align-items:center;
        }
        nav a{
          display:inline-block;
          text-decoration:none;
          padding:0.45rem 0.7rem;
          border-radius:8px;
          color:var(--muted);
          font-weight:500;
          font-size:0.95rem;
          transition: all 160ms ease;
          border:1px solid transparent;
        }
        nav a:hover{
          color:var(--text);
          background:var(--accent-weak);
          border-color:var(--border);
          transform:translateY(-1px);
        }
        nav a.active{
          color:var(--accent);
          background:rgba(15,111,139,0.06);
          border-color:var(--accent-weak);
          box-shadow: var(--shadow);
        }

        /* Main */
        main{
          padding:1.6rem 0;
          min-height:60vh;
        }

        /* Card */
        .card{
          background:var(--card);
          border:1px solid var(--border);
          border-radius:var(--radius);
          padding:1rem;
          box-shadow:var(--shadow);
        }

        /* Forms & inputs */
        input, textarea, select, button{
          font:inherit;
          border:1px solid var(--border);
          border-radius:8px;
          padding:0.6rem 0.75rem;
          background:transparent;
          color:var(--text);
          outline:none;
        }
        input:focus, textarea:focus, select:focus{
          border-color:var(--accent);
          box-shadow:0 6px 18px rgba(15,111,139,0.06);
        }

        /* Footer */
        footer{
          padding:1.25rem 0;
          color:var(--muted);
          font-size:0.9rem;
          border-top:1px solid var(--border);
          display:flex;
          justify-content:center;
        }

        /* Layout helpers */
        .container{max-width:var(--max-width);margin:0 auto;}
        .row{display:flex;gap:1rem;align-items:flex-start;}
        .col{flex:1;}

        /* Responsive */
        @media (max-width:820px){
          header{flex-direction:column;align-items:flex-start;gap:0.6rem;padding:0.9rem 0;}
          nav ul{flex-wrap:wrap;}
          .row{flex-direction:column;}
        }

        @media print{
          header, footer { display:none }
          body{padding:0}
        }
    </style>
</head>
<body>
    <header>
        <h1>@yield('page-title', 'App Pegawai')</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/employee') }}">Employee</a></li>
                <li><a href="{{ url('/department') }}">Department</a></li>
                <li><a href="{{ url('/attendance') }}">Attendance</a></li>
                <li><a href="{{ url('/report') }}">Report</a></li>
                <li><a href="{{ url('/settings') }}">Settings</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>
