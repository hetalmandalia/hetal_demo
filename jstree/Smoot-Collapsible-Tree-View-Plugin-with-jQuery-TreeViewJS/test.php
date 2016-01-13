<html>
    <head>
        <style>
            .treeview,
            .treeview ul {
                list-style-type: none;
                overflow: hidden;
            }

            .treeview li {
                text-indent: 1%;
                margin-top: 0.2em;
                padding: 0.15em 0 0.5em 1.5em;
                line-height: 22px;
                background-repeat: no-repeat;
                background-size: 24px 24px;
            }
            .treeview li.contains-items { background-image: url('icons/arrow-left.png'); }
            .treeview li.items-expanded { background-image: url('icons/arrow-down.png'); }
            .treeview>li:hover { cursor: pointer; }
            .treeview span:hover { background-color: rgba(246, 246, 246, 0.7); }
        </style>
    </head>
    <code id="treeModel">
        
<!--var data = [
{
    "text": "Chocolate Beverage",
    "id": "1",
    "parentid": "-1"
}, {
    "id": "2",
    "parentid": "1",
    "text": "Hot Chocolate"
}, {
    "id": "3",
    "parentid": "1",
    "text": "Peppermint Hot Chocolate"
}, {
    "id": "4",
    "parentid": "1",
    "text": "Salted Caramel Hot Chocolate"
}, {
    "id": "5",
    "parentid": "1",
    "text": "White Hot Chocolate"
}, {
    "id": "6",
    "text": "Espresso Beverage",
    "parentid": "-1"
}, {
    "id": "7",
    "parentid": "6",
    "text": "Caffe Americano"
}, {
    "id": "8",
    "text": "Caffe Latte",
    "parentid": "6"
}, {
    "id": "9",
    "text": "Caffe Mocha",
    "parentid": "6"
}, {
    "id": "10",
    "text": "Cappuccino",
    "parentid": "6"
}, {
    "id": "11",
    "text": "Pumpkin Spice Latte",
    "parentid": "6"
}, {
    "id": "12",
    "text": "Frappuccino",
    "parentid": "-1"
}, {
    "id": "13",
    "text": "Caffe Vanilla Frappuccino",
    "parentid": "12"
}, {
    "id": "15",
    "text": "450 calories",
    "parentid": "13"
}, {
    "id": "16",
    "text": "16g fat",
    "parentid": "13"
}, {
    "id": "17",
    "text": "13g protein",
    "parentid": "13"
}, {
    "id": "14",
    "text": "Caffe Vanilla Frappuccino Light",
    "parentid": "12"
}]-->

    </code>
    <ul class="treeview" id="dataTree">
        <li> item 1
                    <ul>
                        <li>subitem 1</li>
                        <li>subitem 2</li>
                    </ul>
                </li>
                <li>Foo Item</li>
                <li> Countries
                    <ul>
                        <li>United States
                            <ul>
                                <li>New York</li>
                                <li>San Francisco</li>
                                <li>Chicago</li>
                                <li>Los Angeles</li>
                            </ul>
                        </li>
                        <li>United Kingdom</li>
                        <li>China</li>
                        <li>India
                            <ul>
                                <li>New Delhi</li>
                                <li>Mumbai</li>
                                <li>Chennai</li>
                                <li>Kolkata</li>
                            </ul>
                        </li>
                        <li>Russia</li>
                        <li>France</li>
                        <li>Germany</li>
                    </ul>
                </li>
    </ul>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="jquery.treeView.js"></script>
    <script>

        $('.treeview').treeView();
        $('.treeview').treeView('expandAll');
        $('.treeview').treeView('collapseAll');
//        var dataTree = $('#dataTree');       
//        var model = JSON.parse($('#treeModel').html());       
//        dataTree.treeView(model);




    </script>
</html>