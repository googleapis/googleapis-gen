// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Generated code. DO NOT EDIT!

namespace Google.Cloud.BigQuery.Reservation.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedReservationServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for DeleteReservationAsync</summary>
        public async Task DeleteReservationRequestObjectAsync()
        {
            // Snippet: DeleteReservationAsync(DeleteReservationRequest, CallSettings)
            // Additional: DeleteReservationAsync(DeleteReservationRequest, CancellationToken)
            // Create client
            ReservationServiceClient reservationServiceClient = await ReservationServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteReservationRequest request = new DeleteReservationRequest
            {
                ReservationName = ReservationName.FromProjectLocationReservation("[PROJECT]", "[LOCATION]", "[RESERVATION]"),
            };
            // Make the request
            await reservationServiceClient.DeleteReservationAsync(request);
            // End snippet
        }
    }
}
