<style>
    .superior {
        width: 99%;
        padding: 1px;
        -webkit-box-shadow: 0px 0px 0px 0px rgba(255, 0, 0);
        box-shadow: 0px 10px 0px 0px rgba(255, 0, 0);
    }

    .titulo {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        font-size: 45px;
    }

    .logo {
        position: absolute;
        top: 2%;
    }

    .meio {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 710px;
        top: 95%;
        width: 32;
        top: 88%;
    }

    .Menu {
        display:inline-flex;
        height: 100px;
        z-index: 1;
        background-color:#95A5A6;
        border-color: red;
    }

    .button {
        border: none;
        color: rgb(230, 230, 230);
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .buttoncadastro {
        background-color: red;
        text-decoration-color: white;
        padding: 15px 32px;
        position: absolute;
        top: 92%;
        left: 39%;
    }

    .buttonapagar {
        background-color: red;
        text-decoration-color: white;
        padding: 15px 32px;
        position: absolute;
        top: 92%;
        right: 39%;
    }
    .menu {
        width: 120em ;
        height: 11em ;
        user-select: none ;
        align-items: center ;
        padding: 0 1.9em 2.5em ;
        background-color: whitesmoke ;
        border-radius: 1em 1em 4.5em 4.5em ;
        -webkit-tap-highlight-color: transparent ;

        }
    .buttonfiltros {
        border-radius: 7px;
        background-color: red;
        text-decoration-color: white;
        height: 32px;
        width: 110px;
    }
    .buttonaplicarfiltros {
        background-color: red;
        text-decoration-color: white;
        height: 32px;
        width: 100px;
        z-index: 2;
        right: 100px;
    }

    .buttonteste {
        background-color: red;
        text-decoration-color: white;
        height: 40px;
        width: 120px;
    } 

    .buttonFinalizarCadastro {
        background-color: red;
        padding: 15px 32px;
    }

    .buttontopo {
        border-radius: 20px;
        background-color: red;
        text-decoration-color: white;
        position: absolute;
        right: 1%;
        padding: 15px 32px;
        top: 0%;
    }


    .cadastrar {
        position: absolute;
        height: 450px;
        width: 50%;
        padding: 35px;
        -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 1px 2px 8px 1px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        margin-right: 200;
        top: 25%;
        overflow-y: auto;
        background-color: whitesmoke;
    }

    .lista {
        position: absolute;
        height: 495px;
        width: 85%;
        box-shadow: 0px 10px 0px 0px rgba(255, 0, 0);
        border-radius: 10px;
        top: 35%;
        right: 8%;
        overflow-y: auto;
        background-color: whitesmoke;

    }

    .itens {
        font-size: 24px;
    }

    .dados{
        display: flex;
        font-size: 18px;
    }

    #definicaifont{
        font-size: 14px;
    }
    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 24px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 95%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    input[type="checkbox"] {
        display: inline;
        margin: 0 4px 8px 0;
        font-size: 24px;
        border-bottom: 1px solid #fff;
        padding: 15px;
        color: #000;
        background-color: #f7f7f4;
        cursor: pointer;
        color: #333;
        font-size: 1.2em;
        line-height: 1.3em;
    }

    .listasTabela {
        align-items: center;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 14px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 204.5%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    .list{
        display:inline;
    }

    .Unidade {
        font-size: 20px;
    }
    
    body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
  }
  .table-header {
    display: flex;
    background-color: #95A5A6;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    width: 204%;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 100%;
  }
  .col-2 {
    flex-basis: 100%;
  }
  .col-3 {
    flex-basis: 100%;
  }
  .col-4 {
    flex-basis: 100%;
  }
  .col-5 {
    flex-basis: 100%;
  }
  .col-6 {
    flex-basis: 100%;
  }
  .col-7 {
    flex-basis: 100%;
  }
  .col-8 {
    flex-basis: 100%;
  }
  .col-9 {
    flex-basis: 100%;
  }
  .col-10 {
    flex-basis: 100%;
  }
  .col-11 {
    flex-basis: 100%;
  }
  .col-12 {
    flex-basis: 100%;
  }
  .col-13 {
    flex-basis: 100%;
  }
  .col-14 {
    flex-basis: 100%;
  }
  .col-15 {
    flex-basis: 100%;
  }
  .col-16 {
    flex-basis: 100%;
  }
  .col-17 {
    flex-basis: 100%;
  }
  .col-18 {
    flex-basis: 100%;
  }
  
  @media all and (max-width: 1787px) {
    .table-header {
      display: none;
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}


</style>