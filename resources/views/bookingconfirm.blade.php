
<div class="row">
    <div class="col-md-7" align="right">
        <h4>Booking Confirmed!</h4>
    </div>

    <div class="col-md-5" align="right">
        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Download</a>
    </div>

    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Number of Adult</th>
                    <th>Number of Child</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Special Request</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->location }}</td>
                <td>{{ $booking->date }}</td>
                <td>{{ $booking->time }}</td>
                <td>{{ $booking->adult_no }}</td>
                <td>{{ $booking->child_no }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->phone_no }}</td>
                <td>{{ $booking->special_request }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
