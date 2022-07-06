<form action="{{ url('charge') }}" method="post">
                    <input type="text" name="amount" />
                   {{ \Cart::getTotal() }}
                    <input type="submit" name="submit" value="Pay Now">