<?php
require'../deshboardPart/header.php';
?>


    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>add introduction</h3>
                </div>
                <div class="card-body">
                    <form action="intro_post" method="POST">
                        <label for="title"></label>
                        <input type="text" name="title">
                        <label for="message"></label>
                        <input type="text" name="message"><br>
                        <button type="submit">add intr</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                        <th>title</th>
                        <th>message</th>
                        </tr>
                        <tr>
                        <td>about me</td>
                        <td>my name is toriqul islam</td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>























<?php
require'../deshboardPart/footer.php';
?>